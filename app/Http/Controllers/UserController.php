<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller

{
    function getUser()  {
       $details =DB::select('select  * from details ');
       return view('user',['details' => $details]);

    }
    //
}
