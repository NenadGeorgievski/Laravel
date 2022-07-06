<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CarController extends Controller
{

    public function latestCars()
    {
        return view('dashboard', [
            'cars' => Car::latest()->filter(request(['search']))->get(),
            'categories' => Category::all()
        ]);
    }

    public function index()
    {
        return view('cars.index',[
            'cars' => Car::latest()->paginate(6),
            'categories' => Category::all()
        ]);
    }
    public function create()
    {
        return view('cars.create',[
            'categories' => Category::all()
        ]);
    }

    public function show(Car $car)
    {
        return view('cars.show', [
            'car' => $car
        ]);
    }

    public function edit(Car $car)
    {
        return view('cars.edit',[
            'car' => $car,
            'categories' => Category::all()
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'model' => 'required',
            'excerpt' => 'required|max:255',
            'body' => 'required',
            'price' => 'required|digits_between:1,1000000',
            'thumbnail' => 'required|image' ,
            'slug' => ['required', Rule::unique('cars', 'slug')],
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        $attributes['user_id'] = auth()->id();

        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails','public');

        Car::create($attributes);

        return redirect('/')->with('success', 'New car has been added.');
    }

    public function update(Request $request, Car $car)
    {


        $attributes = request()->validate([
            'model' => 'required',
            'excerpt' => 'required|max:255',
            'body' => 'required',
            'price' => 'required|digits_between:1,1000000',
            'thumbnail' => 'image' ,
            'slug' => ['required'],
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        $attributes['user_id'] = auth()->id();

        if ($request->has('thumbnail')) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails', 'public');
        }

        $car->update($attributes);

        return redirect('/cars')->with('success', 'Car info has been successfully updated.');
    
    }

    public function destroy(Car $car)
    {
        $car->delete();
        
        return redirect('/cars')->with('success','Car entry has been successfully deleted.');
    }

}
