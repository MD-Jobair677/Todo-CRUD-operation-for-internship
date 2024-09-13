<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get("/",[TodoController::class,'CreateToo']);
Route::post('/todos', [TodoController::class, 'storeTodo'])->name('todos.store');