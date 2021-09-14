<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required',
            'password' => 'required'

        ]);

        if(auth()->attempt($attributes)) {
            return redirect('/')->with('success', 'Welcome Back!');
        }

        throw ValidationException::withMessages([
            'email' => 'Your credentials could not be verified.'
        ]);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');        
    }

    public function create()
    {
        return view('sessions.create');
    }
}
