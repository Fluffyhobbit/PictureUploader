<?php

namespace App\Http\Controllers;

use Request;

class NetworkController extends Controller
{
    //
    public function uploadNetwork()
    {
        if(Request::hasFile('file')){
            echo 'Uploaded<br />';
            $file = Request::file('file');
            $file->move('network', $file->getClientOriginalName());
            echo '<img src="network/'. $file->getClientOriginalName(). '" />';

        }
        echo 'Uploaded<br />';
        return redirect('formNetwork');
    }
}
