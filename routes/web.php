<?php

use App\Models\Animal;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\FighterController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AdminFighterController;

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
Route::get('/', [FighterController::class, 'index'])->name('home');

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

//Comments
Route::post('fighters/{fighter:id}/comments', [CommentController::class, 'store']);

//Register user
Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

//User login
Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

//User logout
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

//TODO: Figure out error using middleware EP 62ish -- Version of MAMP doesn't have PHP 8
//Admin 
Route::get('admin/fighters', [AdminFighterController::class, 'index']);
Route::get('admin/fighters/create', [AdminFighterController::class, 'create']);
Route::post('admin/fighters', [AdminFighterController::class, 'store']);
Route::get('admin/fighters/{fighter}/edit', [AdminFighterController::class, 'edit']);
Route::patch('admin/fighters/{fighter}', [AdminFighterController::class, 'update']);