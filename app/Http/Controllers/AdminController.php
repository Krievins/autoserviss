<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use App\Models\User;
use App\Models\UserList;

use function Ramsey\Uuid\v1;

class AdminController extends Controller {


   

    public function categoryIndex () {

        return view('admin.create_category');

    }

    public function categoryCreate () {

        $attributes = request()->validate([
            'category_name' => ['required', 'max:255'],
        ]);

        Category::create($attributes);

        return redirect('/admin/category');

    }

    public function showCategories () {

        $data = Category::all();

        return view('admin.category', ['category' => $data]);

    }
}
