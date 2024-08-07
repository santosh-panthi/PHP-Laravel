<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Detail;

class DetailController extends Controller
{
    function getDetails(){
        // $result = Detail::find(1);
        // $result  = Detail::insert([
        //     'name'=>'dddd',
        //     'subject'=>'java',
        //     'faculty'=>'23'
            
        // ]);
        // if($result){
        //     return "Data inserted successfully";
        // }
        // else{
        //     return "Data not inserted";
        // }
        // $result = [$result];
        // $result = Detail::where('subject','java')->update(['name'=> "chiss"]);
        // if($result){
        //     return "Data updated successfully";
        // }
        // else{
        //     return "Data not updated";
        // }
        // $result = Detail::where('subject','java')->delete();
        // if($result){
        //     return "Data updated successfully";
        // }
        // else{
        //     return "Data not updated";
        // }




        $data = Detail::get();
        

        return view('user',['details'=>$data]);

    }
}

