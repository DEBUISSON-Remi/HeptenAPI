<?php
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\TrajetController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

route::get("categorie/{id?}",[CategorieController::class,'categorieAll']);
route::get("devis/{id?}",[DevisController::class,'list']);
route::get("clients/{id?}",[ClientsController::class,'ClientsAll']);
route::get("trajet/{id?}",[TrajetController::class,'trajet']);


route::post("devis/add",[DevisController::class,'add']);
route::post("clients/add",[ClientsController::class,'add']);
route::post("trajet/add",[TrajetController::class,'add']);

route::delete("devis/delete/{id}",[DevisController::class,'delete']);
route::delete("clients/delete/{id}",[ClientsController::class,'delete']);
route::delete("trajet/delete/{id}",[TrajetController::class,'delete']);

route::put("devis/edit",[DevisController::class,'edit']);
route::put("clients/edit",[ClientsController::class,'edit']);
route::put("trajet/edit",[TrajetController::class,'edit']);
