<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    public function index($id=''){
        $companyData = DB::table('company')->where('status','Active')->first();
        $getAllServices = DB::table('services')->select('id', 'name', 'anchor_keyword')->where('status','Active')->limit(5)->get()->toArray();
        if(empty($id)){
            $servicesData = DB::table('services')->select('id', 'name as service_name', 'anchor_keyword', 'logo', 'image')->where('status', 'Active')->inRandomOrder()->get();
            $serviceImgFolName = 'services';
        }else{
            $serviceImgFolName = 'project_service';
            $servicesData = DB::table('services as s')
                ->select('s.id', 'idm.image_name as image', 'idm.is_thumbnail', 'idm.thumbnail_url')
                ->leftjoin('images_descriptions_mapping as idm', 'idm.service_id', '=', 's.id')
                ->where('idm.category', 'Service')
                ->where('idm.status', 'Active')
                ->where('s.id', $id)
                ->get();
        }

        return view('website.services',compact('servicesData', 'companyData', 'getAllServices', 'id', 'serviceImgFolName'));
    }
}
