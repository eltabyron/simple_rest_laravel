<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Models\Empresa;

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


Route::get('/empresas','EmpresaController@index');
Route::put('/empresas/editar','EmpresaController@update');
Route::post('/empresas/agregar','EmpresaController@store');
//Route::delete('/empresas/borrar/{id}','EmpresaController@destroy');
//Route::get('/empresas/buscar/{id}','EmpresaController@show');
Route::get('/empresas/buscar/{id}',function($id){
    return Empresa::findOrFail($id);
});
Route::delete('/empresas/borrar/{id}',function($id){
    return Empresa::destroy($id);
});