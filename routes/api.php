<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\CountyController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Custom Routes
if (App::environment('production')) {
    URL::forceScheme('https');
}


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(["as" => "api.", "prefix" => "v1"], function(){

    Route::post('register', [RegisterController::class, 'register'])->name("register");
    Route::get("counties", [CountyController::class, 'index'])->name("counties");

    Route::apiResource("feeds", FeedController::class);
    Route::get("my-feeds", [FeedController::class, 'getMyFeeds'])->name("myfeeds.get");
    Route::post("feed-media", [FeedController::class, 'uploadFeedMedia'])->name("feedmedia.upload");
    Route::put("to-pipeline/{feed_id}", [FeedController::class, 'moveToPipeline'])->name("feed.topipeline");


    Route::apiResource("comments", CommentController::class);
    Route::apiResource("likes", LikeController::class);

    Route::put("coverphoto/update", [HomeController::class, 'updateCoverPhoto'])->name("coverphoto.update");
    Route::post('update-profile', [HomeController::class, 'updateProfile'])->name("profile.update");


});
