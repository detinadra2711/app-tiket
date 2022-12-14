<?php

use Illuminate\Support\Facades\{Route, Auth};
use App\Http\Controllers\TiketonDutyController;
use App\Http\Controllers\TiketoffDutyController;
// use Illuminate\Support\Facades\Auth;

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
    return view('layout.landing');
});

// Route::get('/', function () {
//     return view('reservasi_onduty.index');    
// });


Route::resource('tiket_onduty', TiketonDutyController::class);
Route::resource('tiket_offduty', TiketoffDutyController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
