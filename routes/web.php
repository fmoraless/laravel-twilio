<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendCodeController;

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

Route::get('/send-sms', [SendCodeController::class, 'send'])->name('send.sms');
Route::get('/recibe-sms/{code}', [SendCodeController::class, 'recibe'])->name('recibe.sms');
