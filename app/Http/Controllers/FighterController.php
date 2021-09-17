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

    public function create()
    {
        if(auth()->guest()) {
            abort(Response::HTTP_FORBIDDEN);
        }
        if(auth()->user()->username !== 'Charlie') {
            abort(Response::HTTP_FORBIDDEN);
        }
        return view('admin.fighters.create');
    }

    public function store()
    {   
        $attributes = request()->validate([
        'name' => 'required|max:255|unique:animals,name',
        'movement_type' => 'required',
        'attack_type' => 'required',
        'category_id' => 'required',
        'description' => 'required',
        'health' => 'required',
        'strength' => 'required',
        'defense' => 'required',
        'speed' => 'required'
        ]);


        Animal::create($attributes);

        return redirect('/')->with('success', 'Your fighter has been created.');
    }

}
