<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;






Route::get("/",[TodoController::class,'CreateToo']);
Route::post('/todos', [TodoController::class, 'storeTodo'])->name('todos.store');
Route::get('/all-todos', [TodoController::class, 'allTodo'])->name('all.todos');

Route::get('/todos-edit/{id}', [TodoController::class, 'todoEdit'])->name('todos.edit');
Route::put('/todos-update/{id}', [TodoController::class, 'todoUpdate'])->name('todos.update');
Route::delete('/todos-delete/{id}', [TodoController::class, 'todoDelete'])->name('todo.delete');