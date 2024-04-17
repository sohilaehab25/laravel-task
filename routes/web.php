<?php
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/students',[StudentController::class,"index"]);

// Route::get('/stedent/{id}', function ($id) {
//     $students = [
//         ['id' => $id,'email' => 'soso0a@example.com', 'password' => '1234'],
//     ];

//     return view('stedent', ['students' => $students]);
// });


Route::get('/students/create', [StudentController::class,'create']);
Route::post('/students',[StudentController::class,'store']);

//show table
Route::get('/students/{id}',[StudentController::class,"show"]);


Route::get('/students/{id}/update',[StudentController::class,"edit"]);
Route::put('/students/{id}',[StudentController::class,"update"]);
Route::delete('/students/{id}',[StudentController::class,"destroy"]);




// Route::get('/students/update/{id}', function ($id) {
//     $students = [
//         ['id' => $id,'email' => 'soso0a@example.com', 'password' => '1234'],
//     ];

//     return view('update');
// });
// Route::get('students/update/{id}', function ($id) {
//     $students = [
//         ['id' => $id,'email' => 'soso0a@example.com', 'password' => '1234'],
//     ];

//     return view('update');
// });

