<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    public function index($id=''){
        $companyData = DB::table('company')->where('status','Active')->first();
        $getAllServices = DB::table('services')->select('id', 'name', 'anchor_keyword')->where('status','Active')->limit(5)->get()->toArray();
        $query = DB::table('services as s');
            $query->select('s.id', 's.name as service_name', 's.anchor_keyword', 'idm.is_thumbnail', 'idm.thumbnail_url', 'idm.is_video', 'idm.video_url', 'idm.image_name as image');
            $query->leftjoin('images_descriptions_mapping as idm', 'idm.service_id', '=', 's.id');
            $query->where('idm.status', 'Active');
            if(!empty($id)){
                $query->where('s.id', $id);
            }
        $servicesData = $query->get();
        $serviceImgFolName = 'project_service';
        return view('website.services',compact('servicesData', 'companyData', 'getAllServices', 'id', 'serviceImgFolName'));
    }
}
