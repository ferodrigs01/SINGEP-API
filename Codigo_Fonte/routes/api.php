<?php

use Illuminate\Http\Request;

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

Route::post('/enviar',['as' => 'user.login' ,'uses' => 'Cadastro\AuthLoginController@auth']);

Route::group(['prefix'=>'usuario'],function(){
  Route::get('/list',['uses' => 'Cadastro\Participantes\participantesController@list']);
  Route::post('/save',['uses'=>'Cadastro\Participantes\participantesController@save']);

});
