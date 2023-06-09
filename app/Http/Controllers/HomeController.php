<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function search(){

        return $_POST;
        // return view('website.dynamic_page');
    }

    public function ajaxRequest(){
        $getHomeData = DB::table('home_banners')
                    ->select('image_src','title','descriptions','categories')
                    ->where('categories','all')
                    ->where('status','Active')
                    ->get();
        $data = array();
        foreach($getHomeData as $row){
        }
        print_r($getHomeData);exit;
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
