<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\AdminLoginController  as AdminLoginController;

use App\Http\Controllers\admin\CustomController;
use App\Http\Controllers\admin\IndexController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ShowDataController;
use App\Http\Controllers\admin\CarsExteriorColorController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\Dashboard1Controller;
use App\Http\Controllers\admin\Dashboard2Controller;
use App\Http\Controllers\admin\ExpenseCategoryController;
use App\Http\Controllers\admin\ExpensesController;
use App\Http\Controllers\admin\MemberCategoryController;
use App\Http\Controllers\admin\MembersController;
use App\Http\Controllers\admin\WaMessageController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\admin\CarsController;
use App\Http\Controllers\admin\CarsCylindersController;
use App\Http\Controllers\admin\CarsInteriorColorController;
use App\Http\Controllers\admin\CarsKeysController;
use App\Http\Controllers\admin\CarsMakeController;
use App\Http\Controllers\admin\CarsModelController;
use App\Http\Controllers\admin\CarsOriginController;
use App\Http\Controllers\admin\CarsTransmissionController;
use App\Http\Controllers\admin\WebManagementController;
use App\Http\Controllers\admin\CarsDriveLineController;
use App\Http\Controllers\admin\CarsFuelTypeController;
use App\Http\Controllers\admin\CarsOptionsController;
use App\Http\Controllers\admin\CarsOdometerController;

// admin routes
Route::prefix("admin")->name("admin.")->group( function() {
	Route::group(['middleware' => 'admin.guest'], function(){
		Route::get('/login',[AdminLoginController::class, 'index'])->name('login');
		Route::post('/login',[AdminLoginController::class, 'authenticate'])->name('auth');
	});

	Route::group(['middleware' => 'admin.auth'], function(){

Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
Route::get('/logout',[AdminLoginController::class, 'logout'])->name('logout');

// Route::post('loginForm', [AdminController::class, 'login'])->name('login.form');


Route::get('dashboard1', [Dashboard1Controller::class, 'dashboard1'])->name('dashboard1');
Route::get('dashboard2', [Dashboard2Controller::class, 'dashboard2'])->name('dashboard2');

// members Category
Route::get('memberCategory', [MemberCategoryController::class, 'index'])->name('memberCategory');
Route::get('showMemberCategory', [MemberCategoryController::class, 'show'])->name('showMemberCategory');
Route::post('addMemberCategory', [MemberCategoryController::class, 'add'])->name('addMemberCategory');
Route::post('/editMemberCategory', [MemberCategoryController::class, 'edit'])->name('editMemberCategory');
Route::post('updateMemberCategory',[MemberCategoryController::class,'update'])->name('updateMemberCategory');
Route::post('deleteMemberCategory',[MemberCategoryController::class,'delete'])->name('deleteMemberCategory');

Route::get('members', [MembersController::class, 'members'])->name('members');
Route::get('waMessage', [WaMessageController::class, 'waMessage'])->name('waMessage');
Route::get('expenseCategory', [ExpenseCategoryController::class, 'expenseCategory'])->name('expenseCategory');
Route::get('expenses', [ExpensesController::class, 'expenses'])->name('expenses');
Route::get('Users', [UsersController::class, 'Users'])->name('Users');
Route::get('cars', [CarsController::class, 'cars'])->name('cars');

//car orgin 
Route::get('carsOrigin', [CarsOriginController::class, 'carsOrigin'])->name('carsOrigin');
// Route::get('carsOrigin', [CarsOriginController::class, 'index'])->name('carsOrigin');
Route::get('showCarsOrigin', [CarsOriginController::class, 'show'])->name('showCarsOrigin');
Route::post('addCarsOrigin', [CarsOriginController::class, 'add'])->name('addCarsOrigin');
Route::post('/editCarsOrigin', [CarsOriginController::class, 'edit'])->name('editCarsOrigin');
Route::post('updateCarsOrigin',[CarsOriginController::class,'update'])->name('updateCarsOrigin');
Route::post('deleteCarsOrigin',[CarsOriginController::class,'delete'])->name('deleteCarsOrigin');

// cars make
Route::get('carsMake', [CarsMakeController::class, 'index'])->name('carsMake');
Route::get('showCarsMake', [CarsMakeController::class, 'show'])->name('showCarsMake');
Route::post('getOrigin', [CarsMakeController::class, 'getOrigin'])->name('getOrigin');
Route::post('addCarsMake', [CarsMakeController::class, 'add'])->name('addCarsMake');
Route::post('editCarsMake', [CarsMakeController::class, 'edit'])->name('editCarsMake');
Route::post('editCarsFiles', [CarsMakeController::class, 'getFiles'])->name('editCarsFiles');
Route::post('updateCarsMake',[CarsMakeController::class,'update'])->name('updateCarsMake');
Route::post('deleteCarsMake',[CarsMakeController::class,'delete'])->name('deleteCarsMake');


Route::get('carsModel', [CarsModelController::class, 'carsModel'])->name('carsModel');
Route::get('carsCylinders', [CarsCylindersController::class, 'carsCylinders'])->name('carsCylinders');
Route::get('carsTransmission', [CarsTransmissionController::class, 'carsTransmission'])->name('carsTransmission');
Route::get('carsKeys', [CarsKeysController::class, 'carsKeys'])->name('carsKeys');
Route::get('carsInteriorColor', [CarsInteriorColorController::class, 'carsInteriorColor'])->name('carsInteriorColor');
Route::get('carsExteriorColor', [CarsExteriorColorController::class, 'carsExteriorColor'])->name('carsExteriorColor');
Route::get('carsOptions', [CarsOptionsController::class, 'carsOptions'])->name('carsOptions');
Route::get('carsFuelType', [CarsFuelTypeController::class, 'carsFuelType'])->name('carsFuelType');
Route::get('carsDriveLine', [CarsDriveLineController::class, 'carsDriveLine'])->name('carsDriveLine');
Route::get('carsOdometer', [CarsOdometerController::class, 'carsOdometer'])->name('carsOdometer');
Route::get('webHome', [WebManagementController::class, 'webHome'])->name('webHome');
Route::get('webSliders', [WebManagementController::class, 'webSliders'])->name('webSliders');
Route::get('webFooter', [WebManagementController::class, 'webFooter'])->name('webFooter');
Route::get('webLearning', [WebManagementController::class, 'webLearning'])->name('webLearning');
Route::get('subscribers', [WebManagementController::class, 'subscribers'])->name('subscribers');
Route::get('translation', [WebManagementController::class, 'translation'])->name('translation');


	});
});


// only template
Route::get('mainhome', [IndexController::class, 'index']);

Route::get('readdata', [ShowDataController::class, 'showdata']);
// admin routes starts here

// admin routes ends here