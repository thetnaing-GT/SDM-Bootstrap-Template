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

Route::get('/', fn() => redirect('/new-dashboard'));

Route::get('/new-dashboard', fn() => view('new-dashboard'));
Route::get('/installation', fn() => view('installation'));
Route::get('/on-call', fn() => view('oncall'));
Route::get('/customer', fn() => view('customer'));
Route::get('/lsps', fn() => view('lsp'));
Route::get('/inventory', fn() => view('inventory'));
Route::get('/plan', fn() => view('plan'));
Route::get('/area-code', fn() => view('area-code'));

Route::get('/403', fn() => view('errors.403'));
Route::get('/404', fn() => view('errors.404'));
Route::get('/500', fn() => view('errors.500'));
