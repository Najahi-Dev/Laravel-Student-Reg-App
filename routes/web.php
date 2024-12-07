<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', [StudentController::class,'studentForm'])->name('home'); // View Form(get)

Route::post('add-student',[StudentController::class,'addStudent']);  // Insert Data(post)
