<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    public function index($id=''){
        print_r($id);exit;
        $companyData = DB::table('company')->where('status','Active')->first();
        $getAllServices = DB::table('services')->select('name', 'anchor_keyword')->where('status','Active')->inRandomOrder()->limit(5)->get()->toArray();
        return view('website.services',compact('getAllServices','companyData'));
    }
}
