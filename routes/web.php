<?php

use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\PublicPageController;
use App\Models\City;
use App\Models\State;
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


Route::get('/', [PublicPageController::class, 'index']);


Route::get('register', function(){

    return view("auth.register");

})->name("register")->middleware("guest");

Route::get('/login', function(){
    return view("auth.login");
})->name("login")->middleware("guest");


Route::get("/state/{slug}", [PublicPageController::class, 'stateCounties'])->name("state.counties");



Route::group(['middleware' => ['auth'], "as" => "admin."], function() {


    Route::resource('states', StateController::class);
    Route::resource('cities', CityController::class);

});

