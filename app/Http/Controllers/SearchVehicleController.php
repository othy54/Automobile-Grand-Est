<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SearchVehicleController extends Controller

{

    public function index() {
        return 'yeah';

    }




    public function search() {


        $brand = request('brand');
        $vehicle = DB::table('vehicles')->select('model')->where('brand', $brand)->distinct()->get();

        echo json_encode($vehicle);


    }
}
