<?php


use App\Http\Controllers\API\ClientController;
use App\Http\Controllers\API\SavingController;
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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

route::get('Saving',[SavingController::class, 'index']);
route::get('flexSaving',[SavingController::class, 'get_flex']);
route::get('dpfSaving',[SavingController::class, 'get_dpf']);
route::post('client',[ClientController::class,'store']);
