<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Vehicles;
use App\Images;

class UpdateVehicleController extends Controller
{
    protected function update() {

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
        $optionVehicle = request('option');
        $descriptionVehicle = request('description');
        $soldVehicle = request('sold');
        $id = request('id');

        $catalogue = Vehicles::where('id', $id)->update([

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
            'option' => $optionVehicle,
            'description' => $descriptionVehicle,
            'sold' => $soldVehicle
            
        ]);
        

        if(request()->hasFile('image')) { 
        $delete = Images::where('vehicles_id', $id)->delete();
        

        $files = request()->file('image');
        $date = date("d-m-Y");
        $number = 1;
    
        foreach($files as $file) {
            $array = [];
            
            for ($i = 0; $i < 16 ; $i++) {
                $letters = 'abcdefghijklmnopqrstivwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $rand = rand(0, 51);
                array_push($array, $letters[$rand]);
            }
            
        $imageName = implode('', $array).'('.$date.')'.'.'.$file->getClientOriginalExtension();

        $file->move(public_path('uploads'), $imageName);


        $images = Images::create([
            
            'vehicles_id' => $id,
            'imageName' => $imageName,
            'imageNumber' => $number

        ]);
        $number++;
        
        }
    } 

    return redirect()->route('catalogueBack');
    } 

}
