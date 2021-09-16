<?php

use App\Models\Animal;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\FighterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Home page
Route::get('/', function () {
    return view('fighters', [
        'fighters' => Animal::latest()->get(),
        'categories' => Category::all()
    ]);
})->name('home');

//Sort by category
Route::get('categories/{category:name}', function (Category $category) {
    return view('fighters', [
        'fighters' => $category->fighters,
        'currentCategory' => $category,
        'categories' => Category::all()
    ]);
})->name('category');

//Specific Fighter Stats 
Route::get('fighters/{fighter:id}', [FighterController::class, 'show']);

//Register user
Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

//User login
Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

//User logout
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

//TODO: Figure out error using middleware EP 62ish
//Admin 
Route::get('admin/fighters/create', [FighterController::class, 'create']);
Route::post('admin/fighters', [FighterController::class, 'store']);