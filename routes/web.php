<?php

use App\Http\Controllers\MapViewController;
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

Route::get('/', fn() => redirect('/new-dashboard'))->name('home.redirect');
Route::get('new-dashboard', [MapViewController::class, 'newDashboard'])->name('newDashboard');
Route::get('installation', [MapViewController::class, 'installation'])->name('installation');
Route::get('on-call', [MapViewController::class, 'oncall'])->name('oncall');
Route::get('odn', [MapViewController::class, 'odn'])->name('odn');
Route::get('ticket', [MapViewController::class, 'ticket'])->name('ticket');
Route::get('ticket/create', [MapViewController::class, 'ticketCreate'])->name('ticketCreate');
Route::get('ticket/{id}', [MapViewController::class, 'ticketShow'])->name('ticketShow');
