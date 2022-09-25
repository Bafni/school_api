<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::controller(AuthController::class)->prefix('auth')->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
    Route::get('me', 'me');

});
Route::group(['namespace' => 'App\Http\Controllers\Rooms\\', 'prefix' => 'rooms' ], function () {
    Route::get('/', 'IndexController');
    Route::get('/{model}', 'ShowController');
    Route::post('/', 'StoreController');
    Route::patch('/{model}', 'UpdateController');
});

Route::group(['namespace' => 'App\Http\Controllers\Students\\', 'prefix' => 'students' ], function () {
    Route::get('/', 'IndexController');
    Route::get('/{student}', 'ShowController');
    Route::post('/', 'StoreController');
    Route::patch('/{student}', 'UpdateController');
});

Route::group(['namespace' => 'App\Http\Controllers\Subjects\\', 'prefix' => 'subjects' ], function () {
    Route::get('/', 'IndexController');
    Route::get('/{subject}', 'ShowController');
    Route::post('/', 'StoreController');
    Route::patch('/{subject}', 'UpdateController');
});

Route::group(['namespace' => 'App\Http\Controllers\Themes\\', 'prefix' => 'themes' ], function () {
    Route::get('/', 'IndexController');
    Route::get('/{theme}', 'ShowController');
    Route::post('/', 'StoreController');
    Route::patch('/{theme}', 'UpdateController');
});

Route::group(['namespace' => 'App\Http\Controllers\Statistics\\', 'prefix' => 'statistics' ], function () {
    Route::get('/', 'IndexController');
    Route::get('/{statistic}', 'ShowController');
    Route::post('/', 'StoreController');
    Route::patch('/{statistic}', 'UpdateController');
});
Route::group(['namespace' => 'App\Http\Controllers\Taxonomies\\', 'prefix' => 'taxonomies' ], function () {
    Route::get('/', 'IndexController');
    Route::get('/{taxonomy}', 'ShowController');
    Route::post('/', 'StoreController');
    Route::patch('/{taxonomy}', 'UpdateController');
});
