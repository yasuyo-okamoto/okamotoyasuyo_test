<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;

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

Route::get('/', [InquiryController::class, 'contact']);

Route::get('/confirm', [InquiryController::class, 'confirm']);

Route::get('/thanks', [InquiryController::class, 'thanks']);

Route::get('/admin', [InquiryController::class, 'admin']);

Route::get('/register', [InquiryController::class, 'register']);

Route::get('/login', [InquiryController::class, 'login']);
