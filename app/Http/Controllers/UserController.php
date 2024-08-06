<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser(Request $request)
    {
        $request-> validate([
            'username' => 'required|min:10',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'city' => 'required|string|max:255'
        ],);
        return $request; 
    }
}

