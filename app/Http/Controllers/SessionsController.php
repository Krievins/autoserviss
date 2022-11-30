<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    
    public function create () {

        return view('sessions.login');

    }

    public function store () {

        // Attempt to authenticate and login the user

        $attributes = request()->validate([

            'email' => ['required'],
            'password'=> ['required']

        ]); 

        // dd($attributes);

        if(auth()->attempt($attributes)){
            
            return redirect('/worker')->with('Success');

        }

        // Auth Failed 

        return back()->withErrors(['email' => 'Provided email could not be werified']);
    }


    public function destroy () {
        
        auth()->logout();

        return redirect('/');

    }

    public function admin () {

        return view('admin.admin');

    }

    public function worker () {

        if (auth()->user()->role_id == 1) {
            return view('admin.admin');
        } 

        return view('worker.worker');

    }
}
