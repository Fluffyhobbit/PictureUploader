<?php

namespace App\Http\Controllers;

use Request;

class AnalyticsController extends Controller
{
    //
    public function uploadAnalytics()
    {
        if(Request::hasFile('file')){
            echo 'Uploaded<br />';
            $file = Request::file('file');
            $file->move('analytics', $file->getClientOriginalName());
            echo '<img src="analytics/'. $file->getClientOriginalName(). '" />';

        }
        echo 'Uploaded<br />';
        return redirect('formAnalytics');
    }
}
