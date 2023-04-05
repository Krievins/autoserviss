<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CreateuserController extends Controller
{
    public function index () {

        $categories = Category::all();

        return view('admin.Controllers.create_user', ['categories'=>$categories]);

    }

    public function all_users () {
        
        $data = User::paginate(10);

        return view('admin.Controllers.users', ['members'=>$data]);

    }

    public function insert_user () {

     
        $attributes = request()->validate([
            'name' => ['required', 'max:255'],
            'surname' => ['required', 'max:255'],
            'email' => ['required', 'max:255'],
            'phone' => ['required'],
            'username' => ['required', 'max:255'],
            'password' => ['required', 'max:255'],
        ]);

       

        // $basic  = new \Nexmo\Client\Credentials\Basic(getenv("NEXMO_KEY"), getenv("NEXMO_SECRET"));
        // $client = new \Nexmo\Client($basic);
 
        // $message = $client->message()->send([
        //     'to' => '371' . $attributes['phone'],
        //     'from' => 'Digitifull',
        //     'text' => 'Hey, ' . $attributes['name'] . 
        //     'Piekļuve tavam profilam:
            
        //     E-pasts - '. $attributes['email'] .'
        //     Parole - '. $attributes['password'].'
            
        //     Lai Ražīgs Darbiņš!'
        // ]);

        User::create($attributes);
        $categories = Category::all();

        return response()->json(['success'=>'Lietotājs Veiksmīgi Tika Pievienots.']);
        // return view('admin.Controllers.create_user', ['categories'=>$categories]);

    }

    // public function send_msg ()
    // {
    //     $basic  = new \Nexmo\Client\Credentials\Basic(getenv("NEXMO_KEY"), getenv("NEXMO_SECRET"));
    //     $client = new \Nexmo\Client($basic);
 
    //     $message = $client->message()->send([
    //         'to' => '37129494712',
    //         'from' => 'Digitifull',
    //         'text' => 'Hey! Atool! Zas ig gut! Testa SMS ir veiksmīgs!'
    //     ]);
 
    //     return redirect()->back()->with('success', 'Message was sent Succesfuly!'); 

    // }
}
