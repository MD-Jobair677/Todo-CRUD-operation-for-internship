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


    public function allTodo()
    {
        // Get 10 todos from the database
        $todos = Todo::latest()->paginate(10);

        // Pass todos to the view
        return view('all_todo', compact('todos'));
    }

    public function todoEdit($id)
    {
        $todo = Todo::findOrFail($id);
        return view('edite_todo', compact('todo'));
    }


function todoUpdate(Request $request, $id){
    $request->validate([
        'title' => 'required|string|max:30',
        'name' => 'required|string|max:20',
        'details' => 'required|string|max:255',
    ]);



    $todo  = Todo::findOrFail($id);
    $todo->name  = $request->name;
    $todo->title  = $request->title;
    $todo->details  = $request->details;
    $todo->save();

      return redirect()->back()->with('success', 'Todo update successfully!');
    
}


}
