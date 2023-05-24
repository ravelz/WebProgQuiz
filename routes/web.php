<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\DetailPublisherController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CategoryController;
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
});

Route::get('/home', [HomeController::class, 'showHome'])->name('home');
Route::get('/publisher', [PublisherController::class, 'showPublisher'])->name('publisher');
Route::get('/publisher/{publisher}', [DetailPublisherController::class, 'showPublisher'])->name('detailpublisher');
Route::get('/contact', [AboutUsController::class, 'showAboutUs'])->name('aboutus');
Route::get('/detail/{book}', [DetailController::class, 'showDetail'])->name('detail');
Route::get('/category/{category}', [CategoryController::class, 'showCategory'])->name('category');


