<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectsController extends Controller
{
    public function index(){
        $companyData = DB::table('company')->where('status','Active')->first();
        $getAllProjects = DB::table('projects')->select('id', 'name', 'anchor_keyword', 'logo')->where('status','Active')->limit(5)->get();
        $folderName = 'projects';
        return view('website.projects',compact('companyData', 'getAllProjects', 'folderName'));
    }

    public function projectDetails(Request $request){
        print_r($_POST);exit;
    }
}
