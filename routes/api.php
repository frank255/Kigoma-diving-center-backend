<?php

use App\Http\Controllers\Api\BookingsController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\ServicesController;
use App\Http\Controllers\Api\TeamController;
use App\Http\Controllers\Api\TestimonialsController;
use App\Http\Controllers\Api\SubscribersController;
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
Route::apiResource('bookings', BookingsController::class);
Route::apiResource('services', ServicesController::class);
Route::apiResource('team', TeamController::class);
Route::apiResource('testimonials', TestimonialsController::class);
Route::apiResource('subscribers', SubscribersController::class);
