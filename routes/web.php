<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CrudController;



Route::get('/', function () {
    return view('welcome');
});



// ======= Home
Route::get('/home',[HomeController::class, 'index'])->name('home-index');
// ======= End Home

// ======= Crud
Route::get('/crud',[CrudController::class, 'index'])->name('crud-index');
// ======= End Crud



// ======= post livewire
Route::get('/post', \App\Http\Livewire\Post\Index::class)->name('post.index');
Route::get('/post/create', \App\Http\Livewire\Post\Create::class)->name('post.create');
Route::get('/post/edit/{id}', \App\Http\Livewire\Post\Edit::class)->name('post.edit');
// ======= end post livewire

