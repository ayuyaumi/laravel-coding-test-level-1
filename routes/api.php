<?php

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

Route::namespace('App\Http\Controllers\API')->prefix('v1')->name('v1/')->group(function (){

    Route::prefix('events')->name('events.')->group(function(){

        Route::get('/active-events', [EventController::class, 'getActiveEvents'])->name('active-events');
        

    });

    Route::resource('events', EventController::class);

});
