<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;
use App\Http\Controllers\DropdownController;

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

// Route::get('/', function () {
//     // return view('welcome');
//     Larademo::sayHello();   // Created Facade for testing..
// });


Route::group(["middleware"=>"web"], function(){
    // Route::view('/', 'home');

    Route::get('/', [NewController::class, 'home']);
    Route::view('/register', 'register');
    Route::post('/register', [NewController::class, 'register']);
    Route::view('/login', 'login');
    Route::get('/logout', function () {
        Session::forget('user');
        return redirect('login');
    });
    Route::post('/login', [NewController::class, 'login']);
    Route::get('/customer', [NewController::class, 'customerList']);
    Route::get('/editcustomer/{id}', [NewController::class, 'editCustomer']);
    Route::post('/editcustomer/{id}', [NewController::class, 'updateCustomer']);
    Route::get('/deletecustomer/{id}', [NewController::class, 'deleteCustomer']);
    Route::view('/customeradd', 'customeradd');
    Route::post('/customeradd', [NewController::class, 'customeradd']);
    Route::get('/customer', [NewController::class, 'customerList']);
    Route::view('/vehicleadd', 'vehicleadd');
    Route::post('/vehicleadd', [NewController::class, 'vehicleadd']);
    Route::get('/vehicle', [NewController::class, 'vehicleList']);
    Route::get('/editvehicle/{id}', [NewController::class, 'editVehicle']);
    Route::post('/editvehicle/{id}', [NewController::class, 'updateVehicle']);
    Route::get('/deletevehicle/{id}', [NewController::class, 'deleteVehicle']);

    Route::get('dropdown',[DropdownController::class, 'index']);
    Route::get('getState',[DropdownController::class, 'getState'])->name('getState');
    Route::get('getCity',[DropdownController::class, 'getCity'])->name('getCity');

    // Custom Facade..
    Route::get('/larademo', function () {
    // return view('welcome');
    Larademo::sayHello();   // Created Facade for testing..
    });

});
