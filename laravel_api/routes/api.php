<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('contacts',[ContactController::class,'contact']);
Route::post('save_contacts',[ContactController::class,'save_contact']);
Route::get('find/{id}',[ContactController::class,'show']);
Route::delete('delete/{id}',[ContactController::class,'destroy']);
Route::patch('update/{id}',[ContactController::class,'update']);

//Route::get('contacts',[ContactController::class,'contact']);