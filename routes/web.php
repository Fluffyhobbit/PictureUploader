<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','PictureController@index');
//ERP picture upload
Route::get('/displayErp','DisplayController@displayErp');
Route::get('/formErp','PictureController@formErp');
Route::post('/uploadErp','UploadController@uploadErp');
//Network picture upload
Route::get('/displayNetwork','DisplayController@displayNetwork');
Route::get('/formNetwork','PictureController@formNetwork');
Route::post('/uploadNetwork','NetworkController@uploadNetwork');
//Web Development upload
Route::get('/displayWeb','DisplayController@displayWeb');
Route::get('/formWeb','PictureController@formWeb');
Route::post('/uploadWeb','WebController@uploadWeb');
//Data Analytics upload
Route::get('/displayAnalytics','DisplayController@displayAnalytics');
Route::get('/formAnalytics','PictureController@formAnalytics');
Route::post('/uploadAnalytics','AnalyticsController@uploadAnalytics');
//Computer Science upload
Route::get('/displayScience','DisplayController@displayScience');
Route::get('/formScience','PictureController@formScience');
Route::post('/uploadScience','ScienceController@uploadScience');









