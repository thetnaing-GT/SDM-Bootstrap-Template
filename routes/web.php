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
    return redirect('/new-dashboard');
})->name('home.redirect');

Route::get('/new-dashboard', function () {
    return view('new-dashboard');
})->name('newDashboard');

Route::get('/installation', function () {
    return view('installation');
})->name('installation');

Route::get('/on-call', function () {
    return view('oncall');
})->name('oncall');

Route::get('/customer', function () {
    return view('customer');
})->name('customer');

Route::get('/lsps', function () {
    return view('lsp');
})->name('lsp');

Route::get('/inventory', function () {
    return view('inventory');
})->name('inventory');

Route::get('/plan', function () {
    return view('plan');
})->name('plan');

Route::get('/area-code', function () {
    return view('area-code');
})->name('areacode');

Route::get('/odn', function () {
  return view('odn');
})->name('odn');

Route::get('/fdt', function () {
  return view('fdt');
})->name('fdt');

Route::get('/fat', function () {
  return view('fat');
})->name('fat');

Route::get('/trial', function () {
    return view('trial');
})->name('trial');

Route::get('/403', function () {
    return view('errors.403');
})->name('error.403');

Route::get('/404', function () {
    return view('errors.404');
})->name('error.404');

Route::get('/500', function () {
    return view('errors.500');
})->name('error.500');
