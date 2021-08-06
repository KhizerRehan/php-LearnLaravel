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
    return view('welcome');
});


// First Route
Route::get('/first', function () {
    return view('first');
});

Route::get('/page', function () {
    return view('page');
});

// Form
Route::get('/form', function () {
    return view('form');
});

Route::post('formSubmitByPOST', [\App\Http\Controllers\FormController::class, 'getDataUsingMethodAsPOST']);
Route::get('formSubmitByGET', [\App\Http\Controllers\FormController::class, 'getDataUsingMethodAsGET']);


// Web
Route::get('web', [\App\Http\Controllers\WebController::class, 'index']);

// Extends
Route::view('child1','child1-extend');
Route::view('child2','child2-extend');
