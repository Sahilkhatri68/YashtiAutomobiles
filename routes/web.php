<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomepageController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\AddlistingController;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/',[HomepageController::class, 'index']);

Route::get('/product',[ProductController::class, 'index']);

Route::get('/addlisting',[AddlistingController::class, 'index']);