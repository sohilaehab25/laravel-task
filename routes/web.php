<?php
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/students',[StudentController::class,"index"]);



Route::get('/students/create', [StudentController::class,'create'])->middleware('auth');
Route::post('/students',[StudentController::class,'store']);

//show table
Route::get('/students/{id}',[StudentController::class,"show"]);


Route::get('/students/{id}/update',[StudentController::class,"edit"])->middleware("auth");
Route::put('/students/{id}', [StudentController::class, "update"]);
Route::delete('/students/{id}',[StudentController::class,"destroy"])->middleware("auth");





// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
