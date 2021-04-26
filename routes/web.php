<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('students.students');
// });

Auth::routes();
// Route::resource('/students',StudentController::class);
// Route::resource('/teachers',TeacherController::class);

Route::get('/students',[App\Http\Controllers\StudentController::class,'index']);
Route::get('/programs',[App\Http\Controllers\ProgramController::class,'index']);
Route::get('/programs/create',[App\Http\Controllers\ProgramController::class,'create']);
Route::post('/programs',[App\Http\Controllers\ProgramController::class,'store']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\HomepageController::class, 'index']);

Auth::routes();

Route::get('/attendance',[App\Http\Controllers\AttendanceController::class,'index']);
Route::get('/attendance/rollcall',[App\Http\Controllers\AttendanceController::class,'ChooseRollSheet']);
Route::get('/attendance/rollcall/rollsheet',[App\Http\Controllers\AttendanceController::class,'ShowRollSheet']);
Route::post('/attendance',[App\Http\Controllers\AttendanceController::class,'SetRollCall']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
