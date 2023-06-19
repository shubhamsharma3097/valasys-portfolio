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
                if($filterData == 'all'){
                    $data = array();
                    $finalData = array();
                    $alltypes = ['website', 'branding', 'graphic_design', 'social_media'];
                    $serviceData = Services::whereIn('type',$alltypes)->get();
                    if(count($serviceData) > 0){
                        foreach ($serviceData as $value) {
                            if(!empty($value['service_img_id'])){
                                $randIds = explode(',',$value['service_img_id']);
                                $randomElement = array_rand(array_flip($randIds),2);
                                $bannerData = Banners::whereIn('id',$randomElement)->get()->toArray();
                                if(count($bannerData) > 0){
                                    foreach ($bannerData as $row) {
                                        $data['service_id'] =  $value->id;
                                        $data['name'] =  $value->name;
                                        $data['type'] =  $value->type;
                                        $data['project_id'] =  $value->project_id;
                                        $data['img_src'] =  $row['img_src'];
                                        array_push($finalData, $data);
                                    }
                                }
                            }
                        }
                        return response()->json(['result' => true, 'data' => $finalData], 200);
                    } else {
                        return response()->json(['status' => 500, 'result' => false, 'data' =>'', 'message' => "NO RECORD FOUND"]);
                    }
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
    public function specific_project_details(Request $request){
        DB::enableQueryLog();
        $getAllProjects = DB::table('projects as p')
                                ->select('p.name', 'pbd.image_name', 'psm.image_name as mappImg')
                                ->leftJoin('project_banner_descriptions as pbd', 'pbd.project_id', '=', 'p.id')
                                ->leftJoin('projects_services_mapping as psm', 'psm.project_id', '=', 'p.id')
                                ->leftJoin('services as s', 's.id', '=', 'psm.service_id')
                                ->where('p.id',1)->get();
        // print_r(DB::getQueryLog());exit;
        $post = "SHUBHAM";
        $comments = "SHARMA";
        $likesCount = "sfsdfsdf";
        $html = view('website.details', compact('post', 'comments', 'getAllProjects'))->render();
        return $html;
    }
    
    // This function is basically used for getting all details for specific services, related services, and project. and render all data in modal 
    public function specific_service_details(Request $request){
        print_r("WORKING");
    }

}
