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
    return view('main-web.index');
});
Route::get('/resistor', function(){
    return view('main-web.resistor');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('Dashboard.index');
    })->name('dashboard');
});
Route::get('/service-single', function () {
    return view('main-web.components.service-single');
})->name('capa');
Route::get('/electronic', function () {
    return view('main-web.components.electronic');
})->name('shop');
Route::get('/switch', function () {
    return view('main-web.components.switche');
})->name('etc');