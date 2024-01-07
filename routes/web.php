<?php

use App\Models\Location;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    $data = Location::all();
    return Inertia::render('Home',['locations'=> $data]);
});

Route::get('/terms-of-service', function () {
    return Inertia::render('TermsOfService');
});

Route::get('/privacy-policy', function () {
    return Inertia::render('PrivacyPolicy');
});

