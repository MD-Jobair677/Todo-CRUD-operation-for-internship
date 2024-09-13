<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    function CreateToo (){
        return view("create");
    }


    public function storeTodo(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:30',
            'name' => 'required|string|max:20',
            'details' => 'required|string|max:255',
        ]);

        // Store the todo in the database
      $todos = new Todo();
      $todos->name  = $request->name;
      $todos->title  = $request->title;
      $todos->details  = $request->details;
      $todos->save();

        return redirect()->back()->with('success', 'Todo added successfully!');
    }
}
