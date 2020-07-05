<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisplayController extends Controller
{
    //
    public function displayErp(){

        return view('erp.display');
    }

    public function displayNetwork(){

        return view('network.display');
    }

    public function displayWeb(){

        return view('web.display');
    }

    public function displayAnalytics(){

        return view('analytics.display');
    }

    public function displayScience(){

        return view('science.display');
    }
}
