<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller
{
        Public function test($id){
        // return "hello test  ".$id;
                 return view('any');
}

        public function last(){

             $data=[1=>'lohit', 
                    2=>'john'];
                    
                return view('last', ['items'=>$data]);
}
        public function request2(Request $request){
            $data=$request->input();
            print_r($data);
}
        public function request3(Request $request, $id){
        //     $data=$request->input();
            // To get full url  i can use this below code
            $data=$request->fullUrl();



            echo $id;
            print_r($data);
        }

       

}
