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
// Route::get('/service-single', function () {
//     return view('main-web.components.service-single');
// })->name('capa');
Route::get('/electronic', function () {
    return view('main-web.components.electronic');
})->name('shop');
Route::get('/switch', function () {
    return view('main-web.components.switche');
})->name('etc');
Route::get('/Resistor', function () {
    return view('main-web.components.Resistor');
})->name('shop2');
Route::get('/Capacitor', function () {
    return view('main-web.components.Capacitor');
})->name('shop3');
Route::get('/ledchip', function () {
    return view('main-web.components.ledchip');
})->name('shop4');
Route::get('/Inductors', function () {
    return view('main-web.components.Inductors');
})->name('shop5');
Route::get('/Diodes', function () {
    return view('main-web.components.Diodes');
})->name('shop6');
Route::get('/Transistor', function () {
    return view('main-web.components.Transistor');
})->name('shop7');