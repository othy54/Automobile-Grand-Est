<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class CatalogueController extends Controller
{
    public function showMe() {


        $vehicles = DB::table('vehicles')->get();
        $images = DB::table('images')->select('imageName')->where('imageNumber', 1)->get();

        if(Auth::check()){

        return view('catalogueBack', [

            'vehicles' => $vehicles,
            'images' => $images
            
        ]);

        // print_r($images);



        }else{
            
            return view('welcome');

        }

    }
}
