<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    public function index(){
        $getAllServices = DB::table('services')->select('name', 'anchor_keyword')->where('status','Active')->inRandomOrder()->limit(5)->get()->toArray();
        return view('website.services',compact('getAllServices'));
    }
}
