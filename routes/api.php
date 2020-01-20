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

Route::post('complain', 'ComplainController@store');

Route::get('complains', 'ComplainController@index');
Route::get('complains/{category}', 'ComplainController@index');
Route::get('complains/{category}/{subcategory}', 'ComplainController@index');

Route::get('complain/categories', 'ComplainCategoryController@index');
Route::get('external-links', 'ExternalLinkController@index');
Route::get('social-links', 'ExternalLinkController@social');
Route::get('about-cg-police', 'AboutPoliceController@show');
Route::get('faqs', 'FaqsController@index');