<?php

use App\Models\Product;
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

Route::get('/', fn() => view('welcome'))->name('home');
Route::get('product/{slug}', fn($slug) => view('products.show', ['product' => Product::query()->where('slug', $slug)->firstOrFail()]))->name('product');
Route::get('contact')->name('contact');
