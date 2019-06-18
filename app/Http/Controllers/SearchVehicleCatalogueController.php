<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SearchVehicleCatalogueController extends Controller
{

    public function index() {

        

        $brands = DB::table('vehicles')->select('brand')->distinct()->get();
        $vehicles = DB::table('vehicles')->orderBy('id', 'desc')->get();
        $images = DB::table('images')->orderBy('vehicles_id', 'desc')->select('imageName', 'vehicles_id')->where('imageNumber', '1')->get();
        
        


        return view('catalogue', [
            'brands' => $brands,
            'vehicles' =>  $vehicles,
            'images' => $images
        ]);

    }



    public function search() {

        $brandSearch = request('brand');
        $modelSearch = request('model');
        $priceSearch = request('price');
        $distanceSearch = request('distance');
        $fuelSearch = request('fuel');
        $boiteSearch = request('boite');



        $query = DB::table('vehicles')->orderBy('created_at', 'desc');

        if(!empty($brandSearch)) {
            $query = $query->where('brand', $brandSearch);
        }
        if(!empty($modelSearch)) {
            $query = $query->where('model', $modelSearch);
        }
        if(!empty($priceSearch)) {
            $query = $query->where('price', '<' , $priceSearch);
        }
        if(!empty($distanceSearch)) {
            $query = $query->where('distance', '<',  $distanceSearch);
        }
        if(!empty($fuelSearch)) {
            $query = $query->where('fuel', $fuelSearch);
        }
        if(!empty($boiteSearch)) {
            $query = $query->where('boite', $boiteSearch);
        }

        $vehicles = $query->get();

        

        $brands = DB::table('vehicles')->select('brand')->distinct()->get();
        $images = $query->join('images', 'images.vehicles_id', '=', 'vehicles.id')->select('images.*')->orderBy('vehicles_id', 'desc')->where('imageNumber','1')->get();




        return view('catalogue', [
            'brands' => $brands,
            'vehicles' => $vehicles,
            'images' => $images,
            'count' => $vehicles->count(),
            
            
        ]);
        
    }
}
