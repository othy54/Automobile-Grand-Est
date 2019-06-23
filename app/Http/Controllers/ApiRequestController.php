<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiRequestController extends Controller
{
    public function apiRequest() {

        $siv = request('siv');
        $url= "http://www.immatriculationapi.com/api/reg.asmx/CheckFrance?RegistrationNumber=".$siv."&username=othy54";

        $fileContents = file_get_contents($url);        

        echo $fileContents;
    }
}
