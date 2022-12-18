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
}
