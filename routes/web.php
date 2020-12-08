<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebSiteController;
use App\Http\Controllers\AdminSiteController;
use App\Http\Controllers\UserController;
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
    return view('website.index');
});


Route::get('/site', [WebSiteController::class, 'index']);

Auth::routes([
    "register" => false,
    "reset"=>false
]);

Route::group(['middleware'=>['auth']], function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    //user
    Route::get('/users', [UserController::class, 'index']);
    Route::post('/users/add', [UserController::class, 'store']);
    Route::post('/users/update', [UserController::class, 'update']);
    Route::post('/users/password', [UserController::class, 'change_password']);
    Route::post('/users/change_status',[UserController::class, 'change_status']);
    Route::post('/users/deleteOrResotore',[UserController::class, 'deleteOrResotore']);

    //items
    Route::get('/items', [AdminSiteController::class, 'index']);
    Route::post('/items/add', [AdminSiteController::class, 'store']);
    Route::post('/items/update', [AdminSiteController::class, 'update']);
    Route::post('/items/deleteOrResotore',[AdminSiteController::class, 'deleteOrResotore']);

});