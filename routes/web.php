<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->group(function () {
    Route::get('login',function(){
        return view('admin/login');
    })->name('admin.login');
    Route::get('index',function(){
        return view('admin/index');
    })->name('admin.index');
    Route::get('pricing',function(){
        return view('admin/pricing');
    })->name('admin.createuser');
});
Route::prefix('/')->group(function () { 
    Route::get('project',function(){
        return view('client/project');
    })->name('user.project');
    Route::get('index',function(){
        return view('client/index');
    })->name('user.index');
    Route::get('project-details',function(){
        return view('client/project-details');
    })->name('user.project-details');

});
   