<?php

use App\Http\Controllers\Admin\CountyController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\HomeController;
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


Route::get('/', [PublicPageController::class, 'index'])->name("welcome");


Route::get('register', function(){

    return view("auth.register");

})->name("register")->middleware("guest");

Route::get('/login', function(){
    return view("auth.login");
})->name("login")->middleware("guest");


Route::get("/state/{slug}", [PublicPageController::class, 'stateCounties'])->name("state.counties");


// dashboard routes
Route::get('/home/tradesmen', [HomeController::class, 'index'])->name("home.tradesmen");
Route::get('/home/vendor', [HomeController::class, 'supplier'])->name("home.vendor");



Route::get("feeds", [FeedController::class, 'showFeed'])->name("feeds")->middleware("auth:sanctum");


Route::group(['middleware' => ['auth'], "as" => "admin."], function() {


    Route::resource('states', StateController::class);
    Route::resource('counties', CountyController::class);

});


