<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index($name)
    {

        return 'Hi this is based on homecontroller, Name is :' . $name;
    }
}
