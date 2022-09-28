<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
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
//all listing
Route::get('/', [ListingController::class, 'index']);

//create
route::get('/listings/create', [ListingController::class, 'create']);

//store
route::post('/listings', [ListingController::class, 'store']);

//edit form
route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

//update listing
route::put('/listings/{listing}', [ListingController::class, 'update']);

//delete listing
route::delete('/listings/{listing}', [ListingController::class, 'destroy']);


//single listing
route::get('/listings/{listing}', [ListingController::class, 'show']);


//user
//show register/create form
route::get('/register', [UserController::class, 'create']);

//create user
route::post('/users', [UserController::class, 'store']);

//test
Route::get('/behnam', [TestController::class, 'behnam']);