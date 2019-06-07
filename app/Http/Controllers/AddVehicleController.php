<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Vehicles;
use App\Images;

class AddVehicleController extends Controller
{
    protected function add() {


        $brandVehicle = request('brand');
        $modelVehicle = request('model');
        $versionVehicle = request('version');
        $doorVehicle = request('door');
        $powerVehicle = request('power');
        $fuelVehicle = request('fuel');
        $distanceVehicle = request('distance');
        $priceVehicle = request('price');
        $dateVehicle = request('date');
        $boiteVehicle = request('boite');
        $placeVehicle = request('place');
        $descriptionVehicle = request('description');

        $catalogue = Vehicles::create([

            'brand' => $brandVehicle,
            'model' => $modelVehicle,
            'version' => $versionVehicle,
            'door' => $doorVehicle,
            'power' => $powerVehicle,
            'fuel' => $fuelVehicle,
            'distance' => $distanceVehicle,
            'price' => $priceVehicle,
            'date' => $dateVehicle,
            'boite' => $boiteVehicle,
            'place' => $placeVehicle,
            'description' => $descriptionVehicle,
            
        ]);

        $files = request()->file('image');
        $name = date("d-m-Y");
        $number = 1;
    
        foreach($files as $file) {
            $array = [];
            
            for ($i = 0; $i < 16 ; $i++) {
                $letters = 'abcdefghijklmnopqrstivwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $rand = rand(0, 51);
                array_push($array, $letters[$rand]);
            }
            
        $imageName = implode('', $array).'('.$name.')'.'.'.$file->getClientOriginalExtension();

        $file->move(public_path('uploads'), $imageName);

        $id = DB::table('vehicles')->latest('id')->first();

        $images = Images::create([
            
            'vehicles_id' => $id->id,
            'imageName' => $imageName,
            'imageNumber' => $number

        ]);
        $number++;
        
        }


        return back();
        

    }
}
