<?php

namespace App\Http\Controllers;

use Request;

class ScienceController extends Controller
{
    //
    public function uploadScience()
    {
        if(Request::hasFile('file')){
            echo 'Uploaded<br />';
            $file = Request::file('file');
            $file->move('science', $file->getClientOriginalName());
            echo '<img src="science/'. $file->getClientOriginalName(). '" />';

        }
        echo 'Uploaded<br />';
        return redirect('formScience');
    }
}
