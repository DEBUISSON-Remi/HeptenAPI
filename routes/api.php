<?php
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\ClientsController;

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

route::GET("categorie/{id?}",[CategorieController::class,'categorieAll']);

route::get("devis/{id?}",[DevisController::class,'list']);

route::get("clients/{id?}",[ClientsController::class,'ClientsAll']);

route::post("devis/add",[DevisController::class,'add']);

