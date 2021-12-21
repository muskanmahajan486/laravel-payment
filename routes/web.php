<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SnapController;
use App\Http\Controllers\VtdirectController;
use App\Http\Controllers\VtwebController;
use App\Http\Controllers\TransactionController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('bookall',  [BookController::class, 'bookAuth'])
Route::get('/snap',[SnapController::class, 'snap']);
Route::get('/snaptoken',[SnapController::class, 'token']);
Route::post('/snapfinish',[SnapController::class, 'finish']);

Route::get('/checkout',[VtdirectController::class, 'vtdirect']);
Route::post('/vtdirect',[VtdirectController::class, 'checkout_process']);

Route::get('/vtweb',[VtwebController::class, 'vtweb']);

Route::get('/transaction',[TransactionController::class, 'transaction']);
Route::post('/vt_transaction',[TransactionController::class, 'transaction_process']);