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
route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

//store
route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

//edit form
route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

//update listing
route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

//delete listing
route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');


//single listing
route::get('/listings/{listing}', [ListingController::class, 'show']);


//user
//show register/create form
route::get('/register', [UserController::class, 'create'])->middleware('guest');

//create user
route::post('/users', [UserController::class, 'store']);

//user logout
route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//user login
route::get('/login', [UserController::class, 'login'])->name('login')->middleware('auth'); 

//user authenticate
route::post('/user/authenticate', [UserController::class, 'authenticate']);

//test
Route::get('/behnam', [TestController::class, 'behnam']);