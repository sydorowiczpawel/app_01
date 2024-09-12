<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/registerUser', [App\Http\Controllers\Auth\RegisterController::class, 'create']);

// ADMIN
Route::get('/dev', [App\Http\Controllers\AdminController::class, 'devPanel']);
Route::post('/activateAccount/{id}', [App\Http\Controllers\AdminController::class, 'activateUser']);

// VEHICLES
Route::get('/allVehicles', [App\Http\Controllers\VehicleController::class, 'showAll']);
Route::get('/addVehicle', [App\Http\Controllers\VehicleController::class, 'createVeh']);
Route::post('/storePassNumber', [App\Http\Controllers\VehicleController::class, 'storePassNumber']);
Route::post('/storeVehicle', [App\Http\Controllers\VehicleController::class, 'storeVeh']);
Route::post('/storeChanges/{id}', [App\Http\Controllers\VehicleController::class, 'storeChanges']);
Route::get('/showVehicle/{veh_id}/{user_id}', [App\Http\Controllers\VehicleController::class, 'show']);
Route::get('/editVehicle/{id}', [App\Http\Controllers\VehicleController::class, 'edit']);
Route::get('/deleteVehicle/{id}', [App\Http\Controllers\VehicleController::class, 'destroy']);

// USER
Route::get('/allSoldiers', [App\Http\Controllers\UserController::class, 'getSoldiers']);
Route::get('/personalFile/{pass_number}', [App\Http\Controllers\UserController::class, 'personalFile']);
Route::get('/activateUserForm/{id}', [App\Http\Controllers\UserController::class, 'activateUserForm']);
Route::get('/editSoldier/{id}', [App\Http\Controllers\UserController::class, 'edit']);
Route::post('/updateSoldier/{id}', [App\Http\Controllers\UserController::class, 'update']);
Route::get('/addSoldier', [App\Http\Controllers\UserController::class, 'createSoldier']);
Route::post('/storeSoldier', [App\Http\Controllers\UserController::class, 'storeUser']);
Route::post('/storeAssigns/{id}', [App\Http\Controllers\UserController::class, 'store']);
Route::get('/assignSoldier/{id}', [App\Http\Controllers\UserController::class, 'assign']);
Route::get('/deleteSoldier/{id}', [App\Http\Controllers\UserController::class, 'destroy']);

// DOCS
Route::get('/allDocuments', [App\Http\Controllers\DocumentController::class, 'allDocs']);
Route::get('/addDoc', [App\Http\Controllers\DocumentController::class, 'createEmpty']);
Route::post('/storeDoc', [App\Http\Controllers\DocumentController::class, 'storeEmpty']);

// Leave Forms
Route::get('/allLeaveForms', [App\Http\Controllers\LeaveFormController::class, 'getLeaveForms']);
Route::get('/newLeaveForm/{id}/{passNumber}', [App\Http\Controllers\LeaveFormController::class, 'create']);
Route::get('/newLeaveForm', [App\Http\Controllers\LeaveFormController::class, 'createEmpty']);
Route::post('/storeDepartureOrder/{id}', [App\Http\Controllers\LeaveFormController::class, 'store']);
Route::post('/storeFullDepOrder', [App\Http\Controllers\LeaveFormController::class, 'storeBasic']);
Route::get('/editLeaveForm/{id}', [App\Http\Controllers\LeaveFormController::class, 'edit']);
Route::post('/editLeaveForm/storeChanges/{id}', [App\Http\Controllers\LeaveFormController::class, 'storeChanges']);


