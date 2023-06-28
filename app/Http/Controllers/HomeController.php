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
                
                $query = DB::table('services as s');
                    $query->select('s.id', 's.name as service_name', 's.anchor_keyword', 'idm.is_thumbnail', 'idm.thumbnail_url', 'idm.is_video', 'idm.video_url', 'idm.image_name as image');
                    $query->leftjoin('images_descriptions_mapping as idm', 'idm.service_id', '=', 's.id');
                    $query->where('idm.status', 'Active');
                    if($filterData != 'all'){
                        $query->where('s.anchor_keyword', $filterData);
                    }
                $servicesData = $query->get();
                $serviceImgFolName = 'project_service';
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
                    ->leftjoin('services as s', 's.id', '=', 'idm.service_id')
                    ->where([['idm.project_id', $value->id],['idm.status','Active'],['idm.category', 'Mapped']])->get();
                }else{
                    $sideImgFolName = 'projects';
                    DB::enableQueryLog();
                    $getAllMappedData = DB::table('images_descriptions_mapping as idm')
                    ->select('idm.image_name', 'idm.short_descp', 'idm.brief_descp', 'p.id','p.anchor_keyword', 'p.name as name', 'p.logo', 'p.image', 'p.small_descp', 'idm.is_thumbnail')
                    ->leftjoin('projects as p', 'p.id', '=', 'idm.project_id')
                    ->where([['idm.service_id', $value->id],['idm.status','Active'],['idm.category', 'Mapped']])->get();
                    // print_r(DB::getQueryLog());exit;
                }
                // echo "<pre>";
                // print_r($getAllMappedData);
                $temp['allMappedData'] = array();
                $temp['allMappedTypedData'] = array();
                $tempService = array();
                $serviceData = array();
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
                            array_push($serviceData, $tempService);
                        }
                    }
                    array_push($temp['allMappedTypedData'], array_unique($serviceData, SORT_REGULAR));
                }
                array_push($alldata, $temp);
            }
        }
        $html = view('website.details', compact('alldata', 'id' , 'allTypeData', 'tableName', 'type', 'sideImgFolName'))->render();
        return $html;
    }

}
