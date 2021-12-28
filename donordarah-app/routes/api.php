<?php

use App\Http\Controllers\API\CrudPendonorController;
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

Route::resource('pendonor', CrudPendonorController::class);
Route::post('pendonor/{id}', [CrudPendonorController::class, 'update']);
Route::delete('pendonor/{id}', [CrudPendonorController::class, 'destroy']);
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
