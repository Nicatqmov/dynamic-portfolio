<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\FolderController;
use App\Http\Controllers\admin\PersonController;


Route::get('/', function () {
    return view('master');
});


Route::get('admin' ,function (){
    return redirect()->route('dashboard.index');
});

Route::prefix('admin')->group(function () {
    Route::resource('dashboard',DashboardController::class);
    Route::resource('folders',FolderController::class);
    Route::resource('person',PersonController::class);
});
