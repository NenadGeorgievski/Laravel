<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('categories.index', [
            'categories' => Category::latest()->paginate(8)
        ]);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Category $category)
    {
        Category::create(request()->validate([
            'name' => 'required|max:30',
            'slug' => ['required', Rule::unique('categories', 'slug')]
        ]));

        return redirect('/categories')->with('success', 'New category has been added.');
    }

    public function show(Category $category)
    {
        $cars = Car::where('category_id', $category->id)->latest()->paginate(6);
        return view('cars.index',[
            'cars' => $cars,
            'currentCategory' => $category,
            'categories' => Category::all()
        ]
        );
    }
}
