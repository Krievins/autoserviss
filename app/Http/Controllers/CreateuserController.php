<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class CreateuserController extends Controller
{
    public function index () {

        $categories = Category::all();

        return view('admin.Controllers.create_user', ['categories'=>$categories]);

    }

    public function all_users () {
        
        $data = User::all();

        return view('admin.Controllers.users', ['members'=>$data]);

    }

    public function insert_user () {

        // Create The User

        // return request()->all();

        // $data = request()->all();

        

        $attributes = request()->validate([
            'name' => ['required', 'max:255'],
            'surname' => ['required', 'max:255'],
            'email' => ['required', 'max:255'],
            'phone' => ['required'],
            'username' => ['required', 'max:255'],
            'password' => ['required', 'max:255'],
            'role_id' => ['required']
        ]);

        // dd($attributes['name']);
        
 
        // $affected = DB::update(
        //     'update users set votes = 100 where name = ?',
        //     ['Anita']
        // );

        $basic  = new \Nexmo\Client\Credentials\Basic(getenv("NEXMO_KEY"), getenv("NEXMO_SECRET"));
        $client = new \Nexmo\Client($basic);
 
        $message = $client->message()->send([
            'to' => '371' . $attributes['phone'],
            'from' => 'Digitifull',
            'text' => 'Hey, ' . $attributes['name'] . 
            'Piekļuve tavam profilam:
            
            E-pasts - '. $attributes['email'] .'
            Parole - '. $attributes['password'].'
            
            Lai Ražīgs Darbiņš!'
        ]);

        // @dd($attributes);

        User::create($attributes);

        return redirect('/admin/users');
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
