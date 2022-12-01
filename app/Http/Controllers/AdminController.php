<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use App\Models\UserList;

use function Ramsey\Uuid\v1;

class AdminController extends Controller {


    public function create () {

        return view('admin.create_user');

    }

    public function showUsers () {
        
        $data = User::all();

        return view('admin.users', ['members'=>$data]);

    }

    public function store () {

        // Create The User

        // return request()->all();

        $attributes = request()->validate([
            'name' => ['required', 'max:255', 'min:3'],
            'username' => ['required', 'max:255', 'min:7'],
            'password' => ['required', 'max:255', 'min:7'],
            'email' => ['required', 'email', 'max:255', 'min:7']
        ]);

        User::create($attributes);

        return redirect('/admin/users');
    }

    public function car_index () {

        return view('admin.create_car');

    }

    public function input_car () {

        // Create The User

        // return request()->all();

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

    public function showAllCars () {

        $data = Car::all();
        
        return view('admin.cars', ['cars' => $data]);

    }
}
