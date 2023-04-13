<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProfileController;
use App\Http\Controllers\frontend\CarsController;
use App\Http\Controllers\frontend\SupportController;
use App\Http\Controllers\MemberLoginController;
use App\Http\Controllers\admin\MembersController;
use App\Http\Controllers\AdController;

//salman comment

// website routes starts here
Route::get('/', [HomeController::class, 'index'])->name("index");
Route::get('contact', [HomeController::class, 'contact'])->name('contact');

Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('terms', [HomeController::class, 'terms'])->name('terms');
Route::get('policy', [HomeController::class, 'policy'])->name('policy');


// support
Route::get('support', [SupportController::class, 'support'])->name('support');
Route::post('addSupport',[SupportController::class,'add'])->name('addSupport');
Route::post('/welcome/get_models', [HomeController::class, 'getModels'])->name('getModels');


Route::get('/details', [HomeController::class, 'details']);

Route::name("car.")->group( function()
{

    Route::post('/cars/load_more', [CarsController::class, 'loadMore'])->name('load-more');
    Route::get('/cars/details/{id}', [CarsController::class, 'details'])->name('details');
    Route::get('/cars/members/{id}/', [HomeController::class, 'carMembers'])->name('members');
    Route::get('/cars/list/make/{id}/', [CarsController::class, 'carMake'])->name('list-make');
    Route::post('/cars/add_to_wishlist', [CarsController::class, 'addToWishlist'])->name('add-to-wishlist');
    Route::post('/cars/call_show_number', [CarsController::class, 'callShowNumber'])->name('show-number');
    Route::post('/cars/count_whatsapp', [CarsController::class, 'countWhatsapp'])->name('count-whatsapp');
    Route::get('/cars/all_make', [CarsController::class, 'allMake'])->name('all-make');


});


// Member routes
Route::name("member.")->group( function()
{
    // all guest routes
    Route::group(['middleware' => 'guest'], function()
    {
        Route::get('/login', [MemberLoginController::class, 'login'])->name('login');

        Route::post('/login/pro',[MemberLoginController::class, 'authenticate'])->name('modal-auth');

        Route::post('/login',[MemberLoginController::class, 'authenticate'])->name('auth');


        Route::get('/register', [MemberLoginController::class, 'showRegister'])->name('register');

        Route::post('/register/pro', [MemberLoginController::class, 'register'])->name('post-register');

        Route::post('/member/send-otp', [MemberLoginController::class, 'sendOtp'])->name('register-otp');

        Route::post('/member/check-otp', [MemberLoginController::class, 'checkOtp'])->name('check-otp');

    });

    //all authenticated routes

	Route::group(['middleware' => ['auth']], function(){

		Route::post('/logout',[MemberLoginController::class, 'logout'])->name('logout');

        //Profile
        Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
        Route::post('members/update_profile', [ProfileController::class, 'update'])->name('profile.update_profile');


        Route::get('/myads', [HomeController::class, 'myads'])->name('myads');
        Route::get('/ads/create', [AdController::class, 'showAddForm'])->name('postAd');
        Route::post('/members/get_models', [AdController::class, 'getModels'])->name('get_models');
        Route::post('/members/post_ad_pro', [AdController::class, 'postAdPro'])->name('post_ad_pro');
        Route::post('/members/getDefaultValues', [AdController::class, 'getDefaultValues'])->name('get_default_values');

        Route::get('/members/followers', [MembersController::class, 'followers'])->name('follower');
        Route::get('/members/following', [MembersController::class, 'following'])->name('following');

        Route::post('/members/remove_follower', [MembersController::class, 'removeFollowers'])->name('remove-follower');
        Route::get('/members/wishlist', [MembersController::class, 'wishlist'])->name('wishlist');

	});


    Route::post('/cars/follow_unfollow', [CarsController::class, 'followUnfollow'])->name('follow-unfollow');


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
