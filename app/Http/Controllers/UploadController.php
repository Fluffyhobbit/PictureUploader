<?php 

namespace App\Http\Controllers;

use Request;

class UploadController extends Controller
{
    //
    public function uploadErp()
    {
        if(Request::hasFile('file')){
            echo 'Uploaded<br />';
            $file = Request::file('file');
            $file->move('erp', $file->getClientOriginalName());
            echo '<img src="erp'. $file->getClientOriginalName(). '" />';

        }

        echo 'Uploaded<br />';
        return redirect('formErp');

    }
}
