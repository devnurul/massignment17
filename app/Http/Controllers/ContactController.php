<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    function page(Request $request){
        return view('pages.contact');
    }
    function contactRequest(Request $request){
        // $data['fullName'] = $request->fullName;
        // $data['phone'] = $request->phone;
        // $data['email'] = $request->email;
        // $data['message'] = $request->message;
        // try{

        //     DB::table('contact')->insert($data);
        // }catch(\Exception $e){
        //     return $e;
        // }


        // return response()->json([
        //     'status'=>200,
        //     'name' => $request->fullName,
        // ]);

        // // return DB::table('contacts')->insert($request->input() );

        sleep(5);
        
            return DB::table('contact')->insert($request->input());
        
    }
}
