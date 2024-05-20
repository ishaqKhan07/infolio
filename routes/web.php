<?php

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

Route::get('/', function () {
    return view('index');
});
Route::get('/about-us', function () { return view('about-us'); });
Route::any('contact-us', 'App\Http\Controllers\HomeController@contactUs')->name('contactUs');


Route::group(['prefix' => 'services'], function () {
    Route::get('/', function () { return view('services.index'); });
    Route::get('/ux-ui-product-design', function () { return view('services.ux-ui-product-design'); });
    Route::get('/user-research', function () { return view('services.user-research'); });
    Route::get('/2d-and-3d-animations', function () { return view('services.2d-and-3d-animations'); });
    Route::get('/staff-strengthening', function () { return view('services.staff-strengthening'); });
    Route::get('/website-development', function () { return view('services.website-development'); });
    Route::get('/e-commerce-development', function () { return view('services.e-commerce-development'); });
    Route::get('/mobile-app-development', function () { return view('services.mobile-app-development'); });
    Route::get('/custom-software-development', function () { return view('services.custom-software-development'); });
    Route::get('/architect-solutions', function () { return view('services.architect-solutions'); });
});

Route::group(['prefix' => 'case-studies'], function () {
    Route::get('/', function () { return view('case-studies.index'); });
    Route::get('/scale-up-fitness', function () { return view('case-studies.scale-up-fitness'); });
    Route::get('/zip-mar', function () { return view('case-studies.zip-mar'); });
    Route::get('/i-shop', function () { return view('case-studies.i-shop'); });
    Route::get('/visa-enablers', function () { return view('case-studies.visa-enablers'); });
    Route::get('/truck-remodeling-3d-animation', function () { return view('case-studies.truck-remodeling-3d-animation'); });
    Route::get('/build-link', function () { return view('case-studies.build-link'); });
    Route::get('/fitness', function () { return view('case-studies.fitness'); });
    Route::get('/xoom-md', function () { return view('case-studies.xoom-md'); });
});
