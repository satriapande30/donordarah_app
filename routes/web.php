<?php

use App\Http\Controllers\CrudPendonorController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/home', [CrudPendonorController::class, 'index']);
Auth::routes();
Route::get('/creatependonor', [CrudPendonorController::class, 'create']);
Route::post('/storependonor', [CrudPendonorController::class, 'store']);
Route::get('/editpendonor/{id}', [CrudPendonorController::class, 'edit']);
Route::put('/updatependonor/{id}', [CrudPendonorController::class, 'update']);
Route::get('/deletependonor/{id}', [CrudPendonorController::class, 'destroy']);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('pendonor/export', [CrudPendonorController::class, 'export']);
Route::post('pendonor/import', [CrudPendonorController::class, 'import']);