<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class CommentController extends Controller
{
    public function store(Animal $fighter)
    {
        //Validate
        request()->validate([
            'body' => 'required'
        ]);

        //Create comment
        $fighter->comments()->create([
            'user_id' => request()->user()->id,
            'body' => request('body')
        ]);

        return back();
    }
}
