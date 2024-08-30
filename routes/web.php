<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/registered', [App\Http\Controllers\HomeController::class, 'registered'])->name('registered');

// próba rejestracji użytkownika
// Route::post('/store_document', [App\Http\Controllers\DocumentController::class, 'store_as_admin']);
Route::post('/registerUser', [App\Http\Controllers\Auth\RegisterController::class, 'create']);

// Zrzut z Githuba:
// ADMIN
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index']);
Route::get('/allDocuments', [App\Http\Controllers\AdminController::class, 'getDocs']);
Route::get('/allSoldiers', [App\Http\Controllers\AdminController::class, 'getSoldiers']);
Route::get('/allTanks', [App\Http\Controllers\AdminController::class, 'getTanks']);
Route::get('/allLeaveForms', [App\Http\Controllers\AdminController::class, 'getLeaveForms']);
Route::get('/unverifiedUsers', [App\Http\Controllers\AdminController::class, 'getUnverified']);
Route::get('/addSoldier', [App\Http\Controllers\AdminController::class, 'createSoldier']);
Route::post('/storeSoldier', [App\Http\Controllers\AdminController::class, 'storeUser']);
Route::get('/editUser/{id}', [App\Http\Controllers\AdminController::class, 'editUser']);
Route::post('/activateAccount/{id}', [App\Http\Controllers\AdminController::class, 'activateUser']);

// VEHICLES
Route::get('/allVehicles', [App\Http\Controllers\VehicleController::class, 'index']);
Route::get('/addVehicle', [App\Http\Controllers\VehicleController::class, 'create']);
Route::post('/storeVehicle', [App\Http\Controllers\VehicleController::class, 'store']);
Route::post('/storeChanges/{id}', [App\Http\Controllers\VehicleController::class, 'storeChanges']);
Route::get('/showVehicle/{id}', [App\Http\Controllers\VehicleController::class, 'show']);
Route::get('/editVehicle/{id}', [App\Http\Controllers\VehicleController::class, 'edit']);
Route::get('/deleteVehicle/{id}', [App\Http\Controllers\VehicleController::class, 'destroy']);
// Route::get('/tankslst/{pass_number}', [App\Http\Controllers\TankController::class, 'index']);

// USER
Route::get('/editSoldier/{id}', [App\Http\Controllers\UserController::class, 'edit']);
Route::get('/assignSoldier/{id}', [App\Http\Controllers\UserController::class, 'assign']);
Route::post('/storeAssigns/{id}', [App\Http\Controllers\UserController::class, 'store']);
// Route::get('/personalFile/{pass_number}', [App\Http\Controllers\UserController::class, 'index']);
// Route::get('/personalFile/{pass_number}', [App\Http\Controllers\TankController::class, 'show']);
// Route::post('/updateUser/{id}', [App\Http\Controllers\UserController::class, 'update']);
Route::get('/deleteSoldier/{id}', [App\Http\Controllers\AdminController::class, 'destroy']);

// DOCS
Route::get('/allDocuments', [App\Http\Controllers\DocumentController::class, 'index']);
// Route::get('userDocs/{pass_number}', [App\Http\Controllers\DocumentController::class, 'show']);
// Route::get('/adddoc/{pass_number}', [App\Http\Controllers\DocumentController::class, 'create']);
// Route::post('/docstore/{pass_number}', [App\Http\Controllers\DocumentController::class, 'store']);
// Route::get('/editdoc/{id}', [App\Http\Controllers\DocumentController::class, 'edit']);
// Route::post('/updatedoc/{id}', [App\Http\Controllers\DocumentController::class, 'update']);
// Route::get('/deletedoc/{id}', [App\Http\Controllers\DocumentController::class, 'destroy']);

// DEP_ORERS
// Route::get('/allDepartureOrders/{pass_number}', [App\Http\Controllers\OrderController::class, 'index']);
// Route::get('/selectedTankOrders/{tank_number}', [App\Http\Controllers\OrderController::class, 'showSelected']);
// Route::get('/addDepartureOrder/{pass_number}', [App\Http\Controllers\OrderController::class, 'create']);
// Route::post('/orderStore/{pass_number}', [App\Http\Controllers\OrderController::class, 'neworder']);
// Route::get('/editOrder/{id}', [App\Http\Controllers\OrderController::class, 'edit']);
// Route::post('/finishOrder/{id}', [App\Http\Controllers\OrderController::class, 'finish']);
// Route::get('/orderDetails/{id}', [App\Http\Controllers\OrderController::class, 'show']);

