<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserList;


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
}
