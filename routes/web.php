<?php

use App\Models\Animal;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return view('fighters', [
        'fighters' => Animal::all()
    ]);
});


Route::get('fighters/{fighter}', function ($id) {
    return view('fighter', [
        'fighter' => Animal::findOrFail($id)
    ]);
});
Route::get('register', [RegisterController::class, 'create']);
Route::post('register', [RegisterController::class, 'store']);