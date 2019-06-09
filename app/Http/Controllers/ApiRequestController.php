<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiRequestController extends Controller
{
    public function apiRequest() {

        $siv = request('siv');
        $url= "http://www.immatriculationapi.com/api/reg.asmx/CheckFrance?RegistrationNumber=".$siv."&username=othy54";

       // $url= "http://www.immatriculationapi.com/api/reg.asmx/CheckFrance?RegistrationNumber=Eg258ma&username=othy54";

        // $url = "file/json.xml";

        $fileContents = file_get_contents($url);        

        echo $fileContents;
    }
}
