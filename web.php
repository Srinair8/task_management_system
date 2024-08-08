<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


// Resource routes for tasks

Route::resource('tasks', TaskController::class);
