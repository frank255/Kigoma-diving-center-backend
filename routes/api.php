<?php

use App\Http\Controllers\Api\BookingController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\TeamController;
use App\Http\Controllers\Api\TestimonialController;
use App\Http\Controllers\Api\SubscriberController;
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


Route::apiResource('posts', PostController::class);
Route::apiResource('bookings', BookingController::class);
Route::apiResource('services', ServiceController::class);
Route::apiResource('team', TeamController::class);
Route::apiResource('testimonials', TestimonialController::class);
Route::apiResource('subscribers', SubscriberController::class);
Route::get('search/{booking_reference}',[BookingController::class,'search']);
