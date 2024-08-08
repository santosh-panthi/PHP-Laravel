<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class uploadController extends Controller

{
    function upload(Request $request){
       $path= $request->file('image')->store("public");
       $pathArray = explode('/',$path);
       $img = new Image();
       $img->path=$pathArray[1];
     if($img->save()){
      return  redirect('list');

     }
     else{
        return 'error uploading image';
     }



    }
    function list() {
        $image = Image::all();

        return view('display',['path'=>$image]);
    }
}
