<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // function pagesss(Request $request){
    //     return view('pages.app');
    // }
    function page(Request $request){
        return view('pages.home');
    }
    function herodata(Request $request){
        return DB::table('heropropertices')->first();
    }
    function aboutdata(Request $request){
        return DB::table('abouts')->first();
    }
    function socialdata(Request $request){
        return DB::table('socials')->first();
    }
}
