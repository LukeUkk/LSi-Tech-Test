<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [PageController::class, 'home'])->name('homepage');

Route::resource('/page', PageController::class)->only(['show']);

Route::get('/product/{name}', [ProductController::class, 'show'])
    ->where('name', '[\w-]+') // Add a regular expression constraint to match valid slugs
    ->name('product.show')
    ->middleware('ensureCorrectSlug');

Route::resource('product', ProductController::class)->only(['index', 'create', 'store']);