<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Response;

class FighterController extends Controller
{

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
            'health' => 'required',
            'strength' => 'required',
            'defense' => 'required',
            'speed' => 'required'
        ]);


        Animal::create($attributes);

        return redirect('/')->with('success', 'Your fighter has been created.');
    }
}
