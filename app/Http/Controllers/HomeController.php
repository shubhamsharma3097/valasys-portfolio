<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Banners;
use App\Models\Services;

class HomeController extends Controller
{
    public function ajaxRequest(Request $request){
        try {
            $filterData = $request->input('filterData'); 
            if(!empty($filterData)) {

                $projectsData = DB::table('projects')->select('id', 'name as project_name', 'anchor_keyword', 'pro_logo', 'pro_image', 'pro_small_descp')->where('pro_status','Active')->inRandomOrder()->get();

                $servicesData = DB::table('services')->select('id', 'name as service_name', 'anchor_keyword' ,'service_image')->where('service_status', 'Active')->inRandomOrder()->get();

                return response()->json(['result' => true, 'data' => compact('projectsData', 'servicesData')], 200);


                if($filterData == 'all'){
                    $data = array();
                    $servicesData = array();
                    $servicesData = DB::table('services')->select('id', 'name as service_name', 'anchor_keyword' ,'service_image')->where('service_status', 'Active')->get();
                    // $alltypes = ['website', 'branding', 'graphic_design', 'social_media'];
                    // $serviceData = Services::whereIn('type',$alltypes)->get();
                    // if(count($serviceData) > 0){
                    //     foreach ($serviceData as $value) {
                    //         if(!empty($value['service_img_id'])){
                    //             $randIds = explode(',',$value['service_img_id']);
                    //             $randomElement = array_rand(array_flip($randIds),2);
                    //             $bannerData = Banners::whereIn('id',$randomElement)->get()->toArray();
                    //             if(count($bannerData) > 0){
                    //                 foreach ($bannerData as $row) {
                    //                     $data['service_id'] =  $value->id;
                    //                     $data['name'] =  $value->name;
                    //                     $data['type'] =  $value->type;
                    //                     $data['project_id'] =  $value->project_id;
                    //                     $data['img_src'] =  $row['img_src'];
                    //                     array_push($servicesData, $data);
                    //                 }
                    //             }
                    //         }
                    //     }
                    //     return response()->json(['result' => true, 'data' => compact('projectsData', 'servicesData')], 200);
                    // } else {
                    //     return response()->json(['status' => 500, 'result' => false, 'data' =>'', 'message' => "NO RECORD FOUND"]);
                    // }
                } else {
                    $getBanners = Banners:: where('name', $filterData)
                                            ->where('img_status','Active')
                                            ->inRandomOrder()
                                            ->get();
                    if(count($getBanners) > 0){
                        return response()->json(['result' => true, 'data' => $getBanners], 200);
                    }else{
                        return response()->json(['status' => 500, 'result' => false, 'data' =>'', 'message' => "NO RECORD FOUND"]);
                    }
                }
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
            $allProjectsData = DB::table('projects')->select('id', 'name', 'anchor_keyword', 'pro_logo', 'pro_image', 'pro_small_descp', 'pro_brief_descp')->where('pro_status','Active')->get();
            if(count($allProjectsData) > 0){
                foreach ($allProjectsData as $key => $value) {
                    $temp['pro_id'] = $value->id;
                    $temp['pro_name'] = $value->name;
                    $temp['pro_anchor_keyword'] = $value->anchor_keyword;
                    $temp['pro_logo'] = $value->pro_logo;
                    $temp['pro_image'] = $value->pro_image;
                    $temp['pro_small_descp'] = $value->pro_small_descp;
                    $temp['pro_brief_descp'] = $value->pro_brief_descp;
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
    public function specific_service_details(Request $request){
        print_r("SERVICE WORKING");
    }

}
