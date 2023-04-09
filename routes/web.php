<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

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
Route::get('jobs', [FrontendController::class, 'jobs']);
Route::get('jobDetail', [FrontendController::class, 'jobDetail']);
Route::get('cvs', [FrontendController::class, 'cvs']);
Route::get('shop', [FrontendController::class, 'shop']);
Route::get('news', [FrontendController::class, 'news']);

