<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller

{
    function getUser()
    {
        $details = \App\Models\Detail::all();
        return view('detail', ['details' => $details]);
    }
    //
}
