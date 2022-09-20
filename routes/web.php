<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Http\Controllers\ListingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here () is where you can register web routes for your application. These 33
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//all
Route::get('/', [ListingController::class, 'index']);

//single
route::get('/listings/{listing}', [ListingController::class, 'show']);

