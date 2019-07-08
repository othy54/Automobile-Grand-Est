<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Vehicles;
use App\Images;


class CatalogueController extends Controller
{
    public function showMe() {

        $query = Vehicles::orderBy('id', 'desc')->withTrashed();
        $vehicles = $query->get(); 
        $images = $query->join('images', 'images.vehicles_id', '=', 'vehicles.id')->select('images.*')->orderBy('vehicles_id', 'desc')->where('imageNumber','1')->get();

        if(Auth::check()){

        return view('catalogueBack', [

            'vehicles' => $vehicles,
            'images' => $images,
            
        ]);

        } else {
            
            return redirect()->route('mainPage');

        }

    }
}
