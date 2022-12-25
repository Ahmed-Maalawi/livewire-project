<?php

use App\Http\Livewire\Calculator;
use App\Http\Livewire\CascadingDropdown;
use App\Http\Livewire\ImageUpload;
use App\Http\Livewire\ProductSearch;
use App\Http\Livewire\Register;
use App\Http\Livewire\TodoList;
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

Route::get('/counter', function () {
    return view('welcome');
})->name('counter');

Route::get('calculater', Calculator::class)->name('calculator');
Route::get('todo-list', TodoList::class)->name('todo-list');
Route::get('cascading', CascadingDropdown::class)->name('cascading');
Route::get('products', ProductSearch::class)->name('products');
Route::get('image-upload', ImageUpload::class)->name('image-upload');
Route::get('registration', Register::class)->name('registration');
