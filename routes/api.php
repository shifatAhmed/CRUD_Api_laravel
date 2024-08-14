<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\api;
use App\Http\controllers\usersController;

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

//Route::get("data",[api::class,'getdata']);
Route::get("usersList/{id?}", [usersController::class,'get_users']);
Route::post("add_user",[usersController::class,'add']);
Route::put("update_user",[usersController::class,'update']);
Route::delete("delete_user/{id?}",[usersController::class,'delete']);
Route::get("search_user/{name?}",[usersController::class,'search']);

