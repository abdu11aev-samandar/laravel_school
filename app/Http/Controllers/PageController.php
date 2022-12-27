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

    public function detail()
    {
        return view('detail');
    }

    public function submitted_assignment()
    {
        return view('marks.submitted-assignment');
    }

    public function submitted_mark()
    {
        return view('marks.submitted-mark');
    }

    public function submit_mark()
    {
        return view('assignments.submit-mark');
    }

    public function submit_assignment()
    {
        return view('assignments.submit-assignment');
    }

}
