<?php

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

Route::get('/', function () {
    return view('WelcomePage');
});
Route::get('/HomePage', function () {
    return view('HomePage');
});
Route::get('/LoginPage', function () {
    return view('LoginPage');
});
Route::get('/UserProfile', function () {
    return view('UserProfile');
});
Route::get('/WelcomePage', function () {
    return view('UserProfile');
});
Route::get('/SignupPage', function () {
    return view('SignupPage');
});
Route::get('/shareFoodPage', function () {
    return view('shareFoodPage');
});
Route::get('/donateMoneyPage', function () {
    return view('donateMoneyPage');
});
Route::get('/BuyFoodPage', function () {
    return view('BuyFoodPage');
});
