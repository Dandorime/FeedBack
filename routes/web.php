<?php

use App\Http\Controllers\adminbarController;
use App\Http\Controllers\BarController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SaveController;
use App\Http\Controllers\SendMail;
use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {   
    return view('welcome');
})->name('feedback');
Route::post('/send',[PostController::class,'Submit']);
Route::get('/success',function(){
    return view('success');
})->name('success');
Route::post('/save/{id}',[SaveController::class,'Save'])->name('save');
 
Route::get('/admin',function()
{
    return view('auth.login');
})->name('login');
Route::post('/admin/enter',[adminBarController::class,'Login']);
Route::get('/admin/bar',[BarController::class, 'index'])->name('admins');
