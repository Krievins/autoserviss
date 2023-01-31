<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;

class CreatecarController extends Controller
{
    public function index () {

        $data = User::all();

        return view('admin.Controllers.create_car', ['users'=> $data]);

    }

    public function create_car () {

        $attributes = request()->validate([
            'owner_name' => ['required', 'max:255'],
            'owner_phone' => ['required', 'max:255'],
            'number_plate' => ['required', 'max:255'],
            'release_year' => ['required', 'max:255'],
            'descript' => ['required', 'max:255', 'min:7']
        ]);

        Car::create($attributes);

        return redirect('/admin/cars');

    }

    public function show_cars () {

        $data = Car::all();

        return view('admin.Controllers.cars', ['cars'=>$data]);

    }

    public function get_api_data () {

        $get_vin = $_GET['VIN'];

        $vin = $get_vin; //UU1DJF00970370860
        $id = "decode";

        $apiKey = "6b9eac7d4ca7";  // Your API key
        $secretKey = "811f89b542"; // Your secret key

        $apiPrefix = "https://api.vindecoder.eu/3.2";

        $controlSum = substr(sha1("{$vin}|{$id}|{$apiKey}|{$secretKey}"), 0, 10);

        $data = file_get_contents("{$apiPrefix}/{$apiKey}/{$controlSum}/decode/{$vin}.json", false);
        $result = json_decode($data);

        $decodedData = [];
        foreach ($result->decode as $data) {
            $decodedData[$data->label] = $data->value;
        }

        // echo "Make: " . $decodedData["Make"] . "\n";
        // echo "Model: " . $decodedData["Model"] . "\n\n";

        return  $decodedData;

    }
}
