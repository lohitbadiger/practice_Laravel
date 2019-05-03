<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function show1(Request $request){

        return view('forms');
    }
    public function save(Request $request){

        print_r($request->input());
    }
    
    public function bs(){

        return view('bs.bs');
    }
}
