<?php

use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\CountyController;
use App\Http\Controllers\Api\FeedController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(["as" => "api.", "prefix" => "api/v1"], function(){

    Route::post('register', [RegisterController::class, 'register'])->name("register");

    Route::get("counties", [CountyController::class, 'index'])->name("counties");

    Route::post("post-feed", [FeedController::class, 'postFeed'])->name("feed.post");
    Route::get("feeds", [FeedController::class, 'getFeeds'])->name("feed.get");

    Route::post("post-comment", [CommentController::class, 'postComment'])->name("comment.post");
});
