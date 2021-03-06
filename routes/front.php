<?php

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

Route::get('/', function(){return view('welcome');});


Route::get('/welcomeForm/{attributeId}', 'WelcomeFormController@index');
Route::get('/inputForm/{attributeId}', 'InputFormController@index');
Route::post('/confirmForm/{attributeId}', 'InputFormController@store', function(Request $request){});
Route::post('/inputForm/{attributeId}', 'ConfirmFormController@edit', function(Request $request){});
Route::post('/completeForm', 'ConfirmFormController@store', function(Request $request){});


