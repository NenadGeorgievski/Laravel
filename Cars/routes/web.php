<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoriesController;
use App\Models\Car;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [CarController::class,'latestCars']);

Route::get('/about', function() {
    return view('about');
});

Route::get('/contact', function() {
    return view('contact');
});
Route::get('/cars', [CarController::class, 'index']);

Route::get('/cars/create', [CarController::class,'create']);

Route::get('/categories', [CategoriesController::class,'index']);

Route::post('/categories', [CategoriesController::class,'store'])->middleware('admin');

Route::get('/categories/create', [CategoriesController::class, 'create'])->middleware('admin');

Route::get('/categories/{category:slug}',[CategoriesController::class,'show']);

Route::get('/owners/{owner:username}', function(User $owner) {
    $cars = Car::where('user_id', $owner->id)->latest()->paginate(6);
    return view('cars.index',[
        'cars' => $cars,
        'categories' => Category::all()
    ]
    );
});

Route::post('/cars',[CarController::class,'store'])->name('store');

Route::get('/cars/{car:slug}',[CarController::class,'show']);

Route::get('/cars/{car:slug}/edit',[CarController::class, 'edit'])->middleware('admin');

Route::patch('/cars/{car:slug}',[CarController::class,'update'])->middleware('admin');

Route::delete('/cars/{car:slug}/destroy',[CarController::class,'destroy'])->name('delete')->middleware('admin');


require __DIR__.'/auth.php';

Auth::routes();


