<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function login(Request $request){
        $request->session()->put('user',$request->input('username','passsword'));
        return redirect('profile');
    }
     function logout(){
    if (session()->has('user')) {
        session()->pull('user');
    }
    return redirect('login');
}
}
