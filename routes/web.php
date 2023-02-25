<?php

use App\Http\Controllers\Admin\CountyController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageBoardController;
use App\Http\Controllers\PublicPageController;
use App\Http\Controllers\TradeController;
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


Route::get('/usa', [PublicPageController::class, 'usa'])->name("usa");
Route::get('/', [PublicPageController::class, 'index'])->name("welcome");


Route::get('register', function(){

    return view("auth.register");

})->name("register")->middleware("guest");

Route::get('/login', function(){
    return view("auth.login");
})->name("login")->middleware("guest");


Route::get("/state/{slug}", [PublicPageController::class, 'stateCounties'])->name("state.counties");


// dashboard routes
Route::get('/home/user', [HomeController::class, 'index'])->name("home.user");



Route::get("feeds/{state}/{county}", [FeedController::class, 'showFeed'])->name("feeds")->middleware("auth:sanctum");

Route::get("trades", [TradeController::class, 'index'])->name("trade.list");

Route::get("message-board", [MessageBoardController::class, 'index'])->name("message.board")->middleware("auth:sanctum");


Route::get("portfolio/{username}", [HomeController::class, 'portfolio'])->name("user.portfolio");
Route::get("profile/{username}", [HomeController::class, 'profile'])->name("user.profile");
Route::get("activity/{username}", [HomeController::class, 'activity'])->name("user.activity");

Route::get("settings", [HomeController::class, 'settings'])->name("user.settings");
Route::get("follow", [FollowController::class, "follow"])->name("follow");

Route::group(['middleware' => ['auth'], "as" => "admin."], function() {


    Route::resource('states', StateController::class);
    Route::resource('counties', CountyController::class);

});


Route::get("clear", function(){

    \Artisan::call("optimize:clear");
    dd("done");

});
