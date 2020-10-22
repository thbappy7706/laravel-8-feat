<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{


    public function index()
    {
            return view('login');

    }
    public function loginSub(Request $request)
    {
        $vdata = $request->validate([
                'email'=> 'required|email',
                'password'=> 'required|min:6|max|12'

                ]);
        return  $request->all();
    }



}
