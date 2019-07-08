<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Vehicles;
use App\Images;


class SearchVehicleController extends Controller

{

    public function search() {

        $brand = request('brand');
        $vehicle = Vehicles::select('model')->where('brand', $brand)->distinct()->get();

        echo json_encode($vehicle);

    }
}
