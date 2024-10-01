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
Route::get('/vehicles', [App\Http\Controllers\VehicleController::class, 'show_all']);
Route::get('/showVehicle/{veh_id}', [App\Http\Controllers\VehicleController::class, 'show_single']);
Route::get('/addVehicle', [App\Http\Controllers\VehicleController::class, 'createVeh']);
Route::post('/storePassNumber', [App\Http\Controllers\VehicleController::class, 'storePassNumber']);
Route::post('/storeVehicle', [App\Http\Controllers\VehicleController::class, 'storeVeh']);
Route::post('/storeChanges/{id}', [App\Http\Controllers\VehicleController::class, 'storeChanges']);
Route::get('/editVehicle/{id}', [App\Http\Controllers\VehicleController::class, 'edit']);
Route::get('/deleteVehicle/{id}', [App\Http\Controllers\VehicleController::class, 'destroy']);
Route::get('/userVehicles/{id}', [App\Http\Controllers\VehicleController::class, 'userVeh']);

// USER
Route::get('/soldiers', [App\Http\Controllers\UserController::class, 'show_all']);
Route::get('/personalFile/{pass_number}', [App\Http\Controllers\UserController::class, 'personalFile']);
Route::get('/personalFile/editSoldier/{id}', [App\Http\Controllers\UserController::class, 'edit']);
Route::get('/newSoldier', [App\Http\Controllers\UserController::class, 'create']);
Route::post('/updateSoldier/{id}', [App\Http\Controllers\UserController::class, 'update']);
Route::post('/storeSoldier', [App\Http\Controllers\UserController::class, 'storeUser']);
Route::post('/storeAssigns/{id}', [App\Http\Controllers\UserController::class, 'store']);
Route::get('/assignSoldier/{id}', [App\Http\Controllers\UserController::class, 'assign']);
Route::get('/activateUserForm/{id}', [App\Http\Controllers\UserController::class, 'activateUserForm']);
Route::get('/personalFile/unactive/{id}', [App\Http\Controllers\UserController::class, 'unactive_soldier']);

// DOCS
Route::get('/newDocument', [App\Http\Controllers\DocumentController::class, 'create_empty']);
Route::get('/newDocument/{passNumber}', [App\Http\Controllers\DocumentController::class, 'create_userID']);
Route::post('/storeDocument', [App\Http\Controllers\DocumentController::class, 'store']);
Route::post('/storeDocument/{id}', [App\Http\Controllers\DocumentController::class, 'store_userID']);
Route::get('documents/all', [App\Http\Controllers\DocumentController::class, 'show_all']);
Route::get('documents/active', [App\Http\Controllers\DocumentController::class, 'show_active']);
Route::get('documents/unactive', [App\Http\Controllers\DocumentController::class, 'show_unactive']);


// Leave Forms
Route::get('/leaveForms', [App\Http\Controllers\LeaveFormController::class, 'show']);
Route::get('/leaveForms/new', [App\Http\Controllers\LeaveFormController::class, 'create_empty']);
Route::get('/leaveForms/new/{id}', [App\Http\Controllers\LeaveFormController::class, 'create_vehID']);
Route::get('/leaveForms/new_userID/{passNumber}', [App\Http\Controllers\LeaveFormController::class, 'create_userID']);
Route::post('/storeLeaveForm', [App\Http\Controllers\LeaveFormController::class, 'store_empty']);
Route::post('/storeLeaveForm/{id}', [App\Http\Controllers\LeaveFormController::class, 'store_vehID']);
Route::post('/store_with_userID/{passNumber}', [App\Http\Controllers\LeaveFormController::class, 'store_userID']);
Route::post('/storeFullDepOrder', [App\Http\Controllers\LeaveFormController::class, 'storeBasic']);
Route::get('/editLeaveForm/{id}', [App\Http\Controllers\LeaveFormController::class, 'edit']);
Route::post('/editLeaveForm/storeChanges/{id}', [App\Http\Controllers\LeaveFormController::class, 'storeChanges']);


