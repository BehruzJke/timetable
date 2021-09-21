<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\UserController;
use App\Models\Lesson;
use Illuminate\Http\Request;


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



Route::get('/',[LessonController::class, 'index'])->name('lessons');
Route::get('/create',[LessonController::class, 'create'])->name('create');
Route::post('/create',[LessonController::class, 'save']);
Route::get('/edit/{id}',[LessonController::class,'edit'])->name('edit');
Route::post('/edit/{id}',[LessonController::class,'update']);
Route::get('/delete/{id}',[LessonController::class, 'delete'])->name('delete');
Route::get('/register',[UserController::class,'createUser'])->name('register');
Route::post('/register',[UserController::class,'saveUser']);
Route::get('/login',[UserController::class,'loginuser'])->name('login');
Route::post('/login',[UserController::class,'loggedUser']);
Route::get('/logout',[UserController::class,'logout']);
Route::post('/filter',function(Request $request){
    $lessons = Lesson::where('order',$request->order)->where('room',$request->room)->get();
    return view('lessons',['lessons' => $lessons]);
    
});







