<?php


use App\Http\Controllers\API\ClientController;
use App\Http\Controllers\API\CreditController;
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

route::get('saving',[SavingController::class, 'index']);
route::get('flexSaving',[SavingController::class, 'get_flex']);
route::get('dpfSaving',[SavingController::class, 'get_dpf']);
route::post('client',[ClientController::class,'store']);

route::get('credits',[CreditController::class,'index']);
route::get('creditoEducativo',[CreditController::class,'get_educativo']);
route::get('creditoInversion',[CreditController::class,'get_inversion']);
route::get('creditoInmobiliario',[CreditController::class,'get_inmobiliario']);
//PRUEBA TAXES

