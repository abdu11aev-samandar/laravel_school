<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function main()
    {
        return view('welcome');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

}
