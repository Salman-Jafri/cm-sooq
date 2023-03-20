<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProfileController;
use App\Http\Controllers\MemberLoginController;
use App\Http\Controllers\AdController;

// website routes starts here
Route::get('/', [HomeController::class, 'index'])->name("index");
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');

// Member routes
Route::name("member.")->group( function()
{
    // all guest routes
    Route::group(['middleware' => 'guest'], function()
    {
        Route::get('/login', [MemberLoginController::class, 'login'])->name('login');

        Route::post('/login',[MemberLoginController::class, 'authenticate'])->name('auth');

        Route::get('/register', [MemberLoginController::class, 'show_register'])->name('register');

        Route::post('/register/pro', [MemberLoginController::class, 'register'])->name('post-register');


    });

    //all authenticated routes

	Route::group(['middleware' => ['auth']], function(){

		Route::post('/logout',[MemberLoginController::class, 'logout'])->name('logout');
//Profile
        Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
        Route::post('/profile/update_profile', [ProfileController::class, 'update'])->name('profile.update_profile');


        Route::get('/myads', [HomeController::class, 'myads'])->name('myads');
        Route::get('/watchList', [HomeController::class, 'watchList'])->name('watchList');
        Route::get('/following', [HomeController::class, 'following'])->name('following');
        Route::get('/follower', [HomeController::class, 'follower'])->name('follower');
        Route::get('/ads/create', [AdController::class, 'show_add_form'])->name('postAd');
        Route::post('/members/get_models', [AdController::class, 'get_models'])->name('get_models');
        Route::post('/members/post_ad_pro', [AdController::class, 'post_ad_pro'])->name('post_ad_pro');

	});

});



// after login






//my office
Route::get('myOffice', [HomeController::class, 'myOffice'])->name('myOffice');
Route::get('myOfficeExpenses', [HomeController::class, 'myOfficeExpenses'])->name('myOfficeExpenses');
Route::get('officeClient', [HomeController::class, 'officeClient'])->name('officeClient');
Route::get('officeReport', [HomeController::class, 'officeReport'])->name('officeReport');
Route::get('officeUser', [HomeController::class, 'officeUser'])->name('officeUser');
Route::get('officeInvoiceSetting', [HomeController::class, 'officeInvoiceSetting'])->name('officeInvoiceSetting');
Route::get('officeExpensesCategory', [HomeController::class, 'officeExpensesCategory'])->name('officeExpensesCategory');
// website routes end here
// after login

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
