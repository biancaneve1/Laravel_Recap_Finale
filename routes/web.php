<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtController;
use App\Http\Controllers\PublicController;

Route::get('/' ,[PublicController::class, 'home'])->name('welcome');

Route::get('/profile' ,[PublicController::class, 'profile'])->name('profile');



Route::get('/art/create',[ArtController::class, 'create'])->name('art.create');


Route::get('/art/index',[ArtController::class, 'index'])->name('art.index');


Route::get('/art/show{art}',[ArtController::class, 'show'])->name('art.show');


Route::get('/art/category{category}',[ArtController::class, 'indexCategory'])->name('art.index-category');


Route::get('/art/edit{art}',[ArtController::class, 'edit'])->name('art.edit');