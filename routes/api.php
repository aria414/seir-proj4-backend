<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PoemController;

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
Route::get("/poem", [PoemController::class, 'index']);
Route::get("/poem/{id}", [PoemController::class, 'show']);
Route::put("/poem/{id}", [PoemController::class, 'edit']);
//Route::post('/poem',  [PoemController::class, 'create']);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
