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
});
Route::get('/new-dashboard', function () {
  return view('dashboard.new-dashboard');
});
Route::get('/installation', function () {
  return view('dashboard.installation');
});
Route::get('/on-call', function () {
  return view('dashboard.oncall');
});
Route::get('/customer', function () {
  return view('dashboard.customer');
});
Route::get('/lsps', function () {
  return view('dashboard.lsp');
});
Route::get('/inventory', function () {
  return view('dashboard.inventory');
});
Route::get('/plan', function () {
  return view('dashboard.plan');
});
Route::get('/area-code', function () {
  return view('dashboard.area-code');
});
