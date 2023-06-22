<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectsController extends Controller
{
    public function index(){
        $companyData = DB::table('company')->where('status','Active')->first();
        return view('website.projects',compact('companyData'));
    }
}
