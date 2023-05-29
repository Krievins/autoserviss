<?php

namespace App\Http\Controllers;


use App\Models\Car;
use App\Models\User;
use App\Models\Marks;
use App\Models\Cases;

class CreatecarController extends Controller
{
    public function index () {

        $data = User::all();

        return view('admin.Controllers.Cars.create_car', ['users'=> $data]);

    }

    public function view ($id) {

        $data = Car::findOrFail($id);;

        return view('admin.Controllers.Cars.view_car', ['cars'=> $data]);

    }

    public function edit ($id) {

        $data = Car::findOrFail($id);;

        return view('admin.Controllers.Cars.edit_cars', ['cars'=> $data]);

    }



    public function create_car() {

    $attributes = request()->validate([
        'vin' => ['required', 'max:255'],
        'owner_name' => ['required', 'max:255'],
        'owner_phone' => ['required', 'max:255'],
        'number_plate' => ['required', 'max:255'],
        'release_year' => ['required', 'max:255'],
        'brand' => ['required', 'max:255'],
        'model' => ['required', 'max:255'],
        'body_type' => ['required', 'max:255'],
        'motor' => ['required', 'max:255'],
        'fuel_type' => ['required', 'max:255'],
        'drive_type' => ['required', 'max:255'],
        'sql_number' => ['required', 'max:255'],
    ]);

    $car = Car::create($attributes);
    $carId = $car->id;

    $case = new Cases();
    $case->car_id = $carId; // Replace with the appropriate car ID
    $case->save();
    $caseId = $case->id;

    $inputValues = request()->input('input_values');
    $canvasCircles = request()->input('canvas_circles');


    foreach ($canvasCircles as $index => $circle) {
        $mark = new Marks();
        $mark->mark_x = $circle['x'];
        $mark->mark_y = $circle['y'];
        $mark->mark_desc = $inputValues[$index];
        $mark->case_id = $caseId;
        $mark->save();
    }


    return response()->json(['success' => 'Automašīna veiksmīgi tika pievienota.']);
}

    public function show_cars () {

        $data = Car::withCount('marks')->paginate(10);

        return view('admin.Controllers.Cars.cars', ['cars' => $data]);

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

        return  $decodedData;

    }
}
