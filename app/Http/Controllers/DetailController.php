<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    function getDetails(){
        // $data = DB::table('details')->where("id","1")->get();

        // $result = DB::table('details')->insert([
        //     "name"=>"jojo",
        //     "subject"=>".net",
        //     "faculty"=>"9"
        // ]);
        // if($result){
        //     echo'sucessfully inserted';
        // }
        // else{
        //     echo'insertion failed';
        // }
        
        // $result = DB::table('details')->where("id","1")->update(['name'=>"allu"]);
        // if($result){
        //     echo'sucessfully updated';
        // }
        // else{
        //     echo'updation failed';
        // }
        // $result = DB::table('details')->where("faculty","9")->delete();
        // if($result){
        //     echo'sucessfully updated';
        // }
        // else{
        //     echo'updation failed';
        // }
        
        
        
        
        $data = DB::table('details')->get();

        return view('user',['details'=>$data]);

    }
}

