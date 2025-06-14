<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/',[HomeController::class,'indexx']);
Route::get('/redirect',[HomeController::class,'index']);
Route::post('/postcontact',[HomeController::class,'postcontact']);
Route::get('/show_user',[AdminController::class,'show_user']);
Route::get('/delete_user/{id}',[AdminController::class,'delete_user']);
Route::get('/update_user/{id}',[AdminController::class,'update_user']);
Route::post('/edit_user/{id}',[AdminController::class,'edit_user']);
Route::get('/delete_message/{id}',[AdminController::class,'delete_message']);
Route::get('/show_contact',[AdminController::class,'show_contact']);
Route::get('/create_about',[AdminController::class,'create_about']);
Route::post('/create_post_page',[AdminController::class,'create_post_page']);
Route::get('/show_about',[AdminController::class,'show_about']);
Route::get('/delete_about/{id}',[AdminController::class,'delete_about']);
Route::get('/update_about/{id}',[AdminController::class,'update_about']);
Route::post('/edit_about/{id}',[AdminController::class,'edit_about']);
Route::get('/offer_post',[AdminController::class,'offer_post']);
Route::post('/create_offer_post',[AdminController::class,'create_offer_post']);
Route::get('/showoffer',[AdminController::class,'showoffer']);
Route::get('/delete_offer/{id}',[AdminController::class,'delete_offer']);
Route::get('/update_offer/{id}',[AdminController::class,'update_offer']);
Route::post('/edit_title/{id}',[AdminController::class,'edit_title']);