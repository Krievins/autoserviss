<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function create () {

        return view('sessions.create');

    }

    public function store () {

        // Attempt to authenticate and login the user

        $attributes = request()->validate([

            'email' => ['required'],
            'password'=> ['required']

        ]); 

        // dd($attributes);

        if(auth()->attempt($attributes)){
            
            return redirect('/')->with('Seuccess');

        }

        // Auth Failed 

        return back()->withErrors(['email' => 'Provided email could not be werified']);
    }


    public function destroy () {
        
        auth()->logout();

        return redirect('/');

    }
}
