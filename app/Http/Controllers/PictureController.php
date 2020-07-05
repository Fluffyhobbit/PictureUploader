<?php namespace App\Http\Controllers;

use \Input as Input;

class PictureController extends Controller
{
    //
    public function index()
    {
        return view('erp.index');
    }

    public function formErp()
    {
        return view('erp.form');
    }
    public function formNetwork(){
        
        return view('network.form');
    }
    public function formWeb(){

        return view('web.form');
    }
    public function formAnalytics(){

        return view('analytics.form');
    }
    public function formScience(){

        return view('science.form');
    }
 
}
