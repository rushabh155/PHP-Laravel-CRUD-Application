<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

// !--------------------------------------------------------------------------------------

Route::get("/categories",[App\Http\Controllers\CategoryController::class,'index']);
Route::get("/categories/create",[App\Http\Controllers\CategoryController::class,'create']);
Route::post("categories/create",[App\Http\Controllers\CategoryController::class,'store']);

//! for edit 
Route::get("/categories/{id}/edit",[App\Http\Controllers\CategoryController::class,'edit']);

//! for update
Route::put("/categories/{id}/edit",[App\Http\Controllers\CategoryController::class,'update']);

//! for delete
Route::get('/categories/{id}/delete',[App\Http\Controllers\CategoryController::class,'delete']);