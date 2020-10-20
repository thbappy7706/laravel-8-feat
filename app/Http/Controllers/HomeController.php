<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index($name)
    {

        return 'Hi this is based on homecontroller, Name is :' . $name;
    }


 public function users()
 {

    $name = 'Tanvir Hossen Bappy';
    $users = array(
            "name"=>"Tanvir",
            "email"=>"new@gmail.com",
            "phone"=> "1325132523"


    );

    return view('users', compact('name','users'));


 }

}
