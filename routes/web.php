<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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
//Auth
Route::post('Login', [AuthController::class, 'Login']);
Route::post('editProfile', [AuthController::class, 'editProfile']);
Route::get('Register', [AuthController::class, 'Register']);
//backend
Route::get('admin', [AdminController::class, 'admin']);
Route::get('dashboard', [AdminController::class, 'dashboard']);
Route::get('adminJobs', [AdminController::class, 'adminJobs']);
Route::get('adminMarket', [AdminController::class, 'adminMarket']);
Route::get('postJob', [AdminController::class, 'postJob']);
Route::post('pJob', [AdminController::class, 'pJob']);
Route::get('postNews', [AdminController::class, 'postNews']);
Route::get('postProduct', [AdminController::class, 'postProduct']);
Route::post('pProduct', [AdminController::class, 'pProduct']);
Route::post('deleteJob', [AdminController::class, 'deleteJob']);
Route::post('deleteBlog', [AdminController::class, 'deleteBlog']);
Route::post('postNew', [AdminController::class, 'postNew']);
Route::get('adminNews', [AdminController::class, 'adminNews']);
Route::get('getJob', [AdminController::class, 'getJob']);
Route::get('getBlog', [AdminController::class, 'getBlog']);

//frontend
Route::get('jobs', [FrontendController::class, 'jobs']);
Route::get('jobDetail/{id}/{category}', [FrontendController::class, 'jobDetail']);
Route::get('cvs', [FrontendController::class, 'cvs']);
Route::get('shop', [FrontendController::class, 'shop']);
Route::get('shopDetail/{id}', [FrontendController::class, 'shopDetail']);
Route::get('news', [FrontendController::class, 'news']);
Route::get('newsDetail/{id}/{category}', [FrontendController::class, 'newsDetail']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
