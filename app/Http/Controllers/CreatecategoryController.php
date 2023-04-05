<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CreatecategoryController extends Controller
{
    public function categoryIndex () {

        return view('admin.Controllers.create_category');

    }

    public function categoryCreate () {

        $attributes = request()->validate([
            'category_name' => ['required', 'max:255'],
        ]);

        Category::create($attributes);

        return redirect('/admin/category');

    }

    public function showCategories () {

        $data = Category::paginate(10);

        return view('admin.Controllers.category', ['category' => $data]);

    }
}
