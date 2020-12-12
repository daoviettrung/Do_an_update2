<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\RedirectController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Mod\ModControllers;
use App\Http\Controllers\Member\MemberController;


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

// auth and verified

//=========================Trung==================================
Route::prefix('client')->group(function () {
    Route::get('/home',[ClientController::class,'listpost']);
    Route::get('/post/{slug}',[ClientController::class,'postDetail']);
});
Route::prefix('mod')->group(function (){
    Route::get('HomeMod/{id}',[ModControllers::class,'homeMod']);
    Route::get('/dtPost/{slug}/{idAcc}',[ModControllers::class,'postDetailApprove']);
    Route::get('accept/{id}',[ModControllers::class,'accept']);
    Route::get('delete/{id}',[ModControllers::class,'deletePost']);
    Route::get('listpostmod/{idMod}',[ModControllers::class,'listPostMod']);
    Route::get('detailPost/{slug}/{id}',[ModControllers::class,'detailPost']);

});
Route::prefix('profile')->group(function (){
    Route::get('show/{id}',[MemberController::class,'showProfile']);
    Route::get('EditProfile/{id}',[MemberController::class,'getEditprofile']);
    Route::post('edit_profile/{id}',[MemberController::class,'postEditProfile']);
    Route::get('getEditPassword/{id}',[MemberController::class,'getEditPassword']);
    Route::post('postEditPassword/{id}',[MemberController::class,'postEditPassword']);
});
Route::get('lg',[AuthController::class,'login']);
Route::post('login',[AuthController::class,'checkLogin']);
