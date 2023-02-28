<?php

use App\Http\Controllers\Admin\CountyController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageBoardController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PublicPageController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TradeController;
use App\Models\City;
use App\Models\State;
use App\Models\Trade;
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

    $trades = Trade::all();
    return view("auth.register", compact("trades"));

})->name("register")->middleware("guest");

Route::get('/login', function(){
    return view("auth.login");
})->name("login")->middleware("guest");


Route::get("/state/{slug}", [PublicPageController::class, 'stateCounties'])->name("state.counties");


// dashboard routes
Route::get('/home/user', [HomeController::class, 'index'])->name("home.user");



Route::get("feeds/{state}/{county}", [FeedController::class, 'showFeed'])->name("feeds");

Route::get("trades", [TradeController::class, 'index'])->name("trade.list");



Route::get("messages/{username}", [MessageBoardController::class, 'index'])->name("message.board");
Route::get("portfolio/{username}", [HomeController::class, 'portfolio'])->name("user.portfolio");
Route::get("profile/{username}", [HomeController::class, 'profile'])->name("user.profile");
Route::get("activity/{username}", [HomeController::class, 'activity'])->name("user.activity");

Route::get("settings", [HomeController::class, 'settings'])->name("user.settings");
Route::get("edit-profile", [HomeController::class, 'editProfile'])->name("profile.edit");
Route::post("edit-profile", [HomeController::class, 'updateProfile'])->name("profile.update");

Route::get("follow", [FollowController::class, "follow"])->name("follow");
Route::get("unfollow", [FollowController::class, "unfollow"])->name("unfollow");


Route::get("search", [SearchController::class, "search"])->name("search");

Route::post("send-message", [MessageBoardController::class, 'sendMsg'])->name("send.msg");
Route::post("upload-portfolio", [PortfolioController::class, 'uploadPortfolio'])->name("portfolio.upload");

Route::get("profiles", [PublicPageController::class, "profiles"])->name("profile.list");

// Route::get("add-friend", [FriendController::class, "addFriend"])->name("addfriend");
// Route::get("unfriend", [FriendController::class, "unFriend"])->name("unfriend");

Route::group(['middleware' => ['auth'], "as" => "admin."], function() {


    Route::resource('states', StateController::class);
    Route::resource('counties', CountyController::class);

});


Route::get("clear", function(){

    \Artisan::call("optimize:clear");
    dd("done");

});
