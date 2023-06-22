<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Banners;
use App\Models\Services;

class HomeController extends Controller
{

    public function index(){
        try {
            $getAllServices = DB::table('services')->select('id', 'name', 'anchor_keyword')->where('status','Active')->limit(5)->get()->toArray();
            $companyData = DB::table('company')->where('status','Active')->first();
            if(!empty($companyData)){
                return view('website.home',compact('getAllServices','companyData'));
            }else{
                echo "Company is not available.";
            }
        } catch (QueryException $e) {
            if ($e->getCode() == 2002) {
                echo "Database is not connected";exit;
            }
        }
    }

    public function ajaxRequest(Request $request){
        try {
            $filterData = $request->input('filterData');
            // print_r($filterData);exit;
            $filterData = $filterData[0];
            if(!empty($filterData)) {
                $projectsData = DB::table('projects')->select('id', 'name as project_name', 'anchor_keyword', 'logo', 'image', 'small_descp')->where('status','Active')->inRandomOrder()->get();
                if($filterData == 'all'){
                    $servicesData = DB::table('services')->select('id', 'name as service_name', 'anchor_keyword', 'logo', 'image')->where('status', 'Active')->inRandomOrder()->get();
                    $serviceImgFolName = 'services';
                }else{
                    $serviceImgFolName = 'project_service';
                    $servicesData = DB::table('services as s')
                        ->select('s.id', 'idm.image_name as image')
                        // ->leftjoin('images_descriptions_mapping as idm', 'idm.service_id', '=', 's.id')
                        ->leftjoin('images_descriptions_mapping as idm', 'idm.service_id', '=', 's.id')
                        ->where('idm.category', 'Service')
                        ->where('idm.status', 'Active')
                        ->where('s.anchor_keyword', $filterData)
                        ->get();
                }
                return response()->json(['result' => true, 'data' => compact('servicesData', 'projectsData', 'serviceImgFolName')], 200);

            }else{
                return response()->json(['status' => 500, 'result' => false, 'data' =>'', 'message' => "Something Went Wrong"]);
            }
        } catch (QueryException $e) {
            if ($e->getCode() == 2002) {
                return response()->json(['status' => 500, 'result' => false, 'data' =>'', 'message' => $e->getMessage()]);
            }
        }
    }

    // This function is basically used for getting all details for specific project, related project, and services. and render all data in modal
    public function specific_project_details($id){
        // DB::enableQueryLog();
        if(isset($id)){
            $alldata = array();
            $temp = array();
            $allProjectsData = DB::table('projects')->select('id', 'name', 'anchor_keyword', 'logo', 'image', 'small_descp', 'brief_descp')->where('status','Active')->get();
            if(count($allProjectsData) > 0){
                foreach ($allProjectsData as $key => $value) {
                    $temp['id'] = $value->id;
                    $temp['name'] = $value->name;
                    $temp['anchor_keyword'] = $value->anchor_keyword;
                    $temp['logo'] = $value->logo;
                    $temp['image'] = $value->image;
                    $temp['small_descp'] = $value->small_descp;
                    $temp['brief_descp'] = $value->brief_descp;
                    $getAllMappedData = DB::table('images_descriptions_mapping as idm')
                    ->select('idm.image_name', 'idm.short_descp', 'idm.brief_descp', 's.id as serviceID','s.anchor_keyword as service_anchor_keyword', 's.name as service_name', 's.service_logo', 's.service_image', 's.service_small_descp')
                    ->leftjoin('services as s', 's.id', '=', 'idm.service_id')->where([['idm.project_id', $value->id],['idm.status','Active']])->get();
                    $temp['allMappedData'] = array();
                    $temp['allMappedServiceData'] = array();
                    $tempService = array();
                    if(count($getAllMappedData) > 0){
                        $temp['allMappedData'] = $getAllMappedData;
                        foreach ($getAllMappedData as $row) {
                            if(!empty($row->service_name)){
                                $tempService['id'] = $row->serviceID;
                                $tempService['service_anchor_keyword'] = $row->service_anchor_keyword;
                                $tempService['service_name'] = $row->service_name;
                                $tempService['service_logo'] = $row->service_logo;
                                $tempService['service_image'] = $row->service_image;
                                $tempService['service_small_descp'] = $row->service_small_descp;
                                array_push($temp['allMappedServiceData'], $tempService);
                            }
                        }
                    }
                    array_push($alldata, $temp);
                }
            }
            $html = view('website.details', compact('alldata', 'id' ,'allProjectsData'))->render();
            return $html;
        }
    }

    // This function is basically used for getting all details for specific services, related services, and project. and render all data in modal
    public function specific_details($type,$id){
        $tableName = $type."s";
        $alldata = array();
        $temp = array();
        $allTypeData = DB::table($tableName)->select('id', 'name', 'anchor_keyword', 'logo', 'image', 'small_descp', 'brief_descp')->where('status','Active')->get();
        if(count($allTypeData) > 0){
            foreach ($allTypeData as $key => $value) {
                $temp['id'] = $value->id;
                $temp['name'] = $value->name;
                $temp['anchor_keyword'] = $value->anchor_keyword;
                $temp['logo'] = $value->logo;
                $temp['image'] = $value->image;
                $temp['small_descp'] = $value->small_descp;
                $temp['brief_descp'] = $value->brief_descp;
                if($type == 'project'){
                    $sideImgFolName = 'services';
                    $getAllMappedData = DB::table('images_descriptions_mapping as idm')
                    ->select('idm.image_name', 'idm.short_descp', 'idm.brief_descp', 's.id','s.anchor_keyword as anchor_keyword', 's.name as name', 's.logo', 's.image', 's.small_descp')
                    ->leftjoin('services as s', 's.id', '=', 'idm.service_id')->where([['idm.project_id', $value->id],['idm.status','Active'],['idm.category', 'Mapped']])->get();
                }else{
                    $sideImgFolName = 'projects';
                    $getAllMappedData = DB::table('images_descriptions_mapping as idm')
                    ->select('idm.image_name', 'idm.short_descp', 'idm.brief_descp', 'p.id','p.anchor_keyword', 'p.name as name', 'p.logo', 'p.image', 'p.small_descp')
                    ->leftjoin('projects as p', 'p.id', '=', 'idm.service_id')
                    ->where([['idm.service_id', $value->id],['idm.status','Active'],['idm.category', 'Mapped']])->get();
                }
                $temp['allMappedData'] = array();
                $temp['allMappedTypedData'] = array();
                $tempService = array();
                if(count($getAllMappedData) > 0){
                    $temp['allMappedData'] = $getAllMappedData;
                    foreach ($getAllMappedData as $row) {
                        if(!empty($row->name)){
                            $tempService['id'] = $row->id;
                            $tempService['anchor_keyword'] = $row->anchor_keyword;
                            $tempService['name'] = $row->name;
                            $tempService['logo'] = $row->logo;
                            $tempService['image'] = $row->image;
                            $tempService['small_descp'] = $row->small_descp;
                            array_push($temp['allMappedTypedData'], $tempService);
                        }
                    }
                }
                array_push($alldata, $temp);
            }
        }
        $html = view('website.details', compact('alldata', 'id' , 'allTypeData', 'tableName', 'type', 'sideImgFolName'))->render();
        return $html;
    }

}
