<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Category;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class FighterController extends Controller
{
    public function index()
    {
        return view('fighters', [
        'fighters' => Animal::latest()->filter()->get(),
        'categories' => Category::all()
        ]);
    }

    public function show(Animal $fighter)
    {
            return view('fighters.show', [
            'fighter' => $fighter
        ]);
    }

}
