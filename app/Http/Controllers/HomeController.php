<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function search(){

        return $_POST;
        // return view('website.dynamic_page');
    }

    public function ajaxRequest(Request $request){
        try {
            $filterData = $request->input('filterData'); 
            if(!empty($filterData)){
                if($filterData == 'all'){
                    $allData = array();
                    $highData = array();
                    $alltypes = ['website', 'branding', 'graphic_design', 'social_media'];
                    foreach($alltypes as $row){
                        $getdataForAll = DB::table('home_banners')
                            ->select('image_src','title','descriptions','categories')
                            ->where('categories',$row)
                            ->where('status','Active')
                            ->inRandomOrder()
                            ->limit(2)
                            ->get();
                        if(count($getdataForAll)>0){
                            foreach ($getdataForAll as $key => $val) {
                                $highData['categories'] = $val->categories;
                                $highData['descriptions'] = $val->descriptions;
                                $highData['image_src'] = $val->image_src;
                                $highData['title'] = $val->title;
                                array_push($allData, $highData);
                            }
                        }
                    }
                    if(count($allData) > 0){
                        return response()->json(['result' => true ,'data' => $allData], 200);
                    }else{
                        return response()->json(['status' => 500, 'result' => false ,'data' =>'', 'message' => "NO RECORD FOUND"]);
                    }
                } else {
                    $getHomeData = DB::table('home_banners')
                        ->select('image_src','title','descriptions','categories')
                        ->where('categories',$filterData)
                        ->where('status','Active')
                        ->get();
                    if(count($getHomeData) > 0){
                        return response()->json(['result' => true ,'data' => $getHomeData], 200);
                    }else{
                        return response()->json(['status' => 500, 'result' => false ,'data' =>'', 'message' => "NO RECORD FOUND"]);
                    }
                }
            }else{
                return response()->json(['status' => 500, 'result' => false ,'data' =>'', 'message' => "Something Went Wrong"]);
            }
        } catch (QueryException $e) {
            if ($e->getCode() == 2002) {
                return response()->json(['status' => 500, 'result' => false ,'data' =>'', 'message' => $e->getMessage()]);
            }
        }
    }

    public function ajaxRequestPost(Request $request)
    {
        $input = $request->all();
        $getHomeData = DB::table('home_banners')
                            ->select('image_src','title','descriptions','categories')
                            ->where('categories','all')
                            ->where('status','Active')
                            ->get();
        print_r($getHomeData);
     
        // return response()->json(['success'=>'Got Simple Ajax Request.']);
    }

}
