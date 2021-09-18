<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Animal;

class AdminFighterController extends Controller
{
    public function index()
    {
        return view('admin.fighters.index', [
            'fighters' => Animal::paginate(50)
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

    public function edit(Animal $fighter)
    {
        return view('admin.fighters.edit', ['fighter' => $fighter]);
    }

    public function update(Animal $fighter)
    {
        $attributes = request()->validate([
        'name' => ['required', Rule::unique('animals', 'name')->ignore($fighter->id)],
        'movement_type' => 'required',
        'attack_type' => 'required',
        'category_id' => 'required',
        'description' => 'required',
        'health' => 'required',
        'strength' => 'required',
        'defense' => 'required',
        'speed' => 'required'
        ]);

        $fighter->update($attributes);

        return back()->with('success', 'Fighter Updated!');
    }
}
