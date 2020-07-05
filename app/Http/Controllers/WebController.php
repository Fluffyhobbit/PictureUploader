<?php

namespace App\Http\Controllers;

use Request;

class WebController extends Controller
{
    //
    public function uploadWeb()
    {
        if(Request::hasFile('file')){
            echo 'Uploaded<br />';
            $file = Request::file('file');
            $file->move('Web', $file->getClientOriginalName());
            echo '<img src="Web/'. $file->getClientOriginalName(). '" />';

        }
        echo 'Uploaded<br />';
        return redirect('formWeb');
    }
}
