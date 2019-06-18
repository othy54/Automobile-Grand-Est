<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepriseController extends Controller
{
    protected function index() {
        return view('reprise');
    }
}
