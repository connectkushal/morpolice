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

Route::get('/', function () {
    return redirect()->route('complains');
})->middleware('auth');

Route::post('/test', function () {
    dd( Request::all() );
});


Route::group(
    [
        'prefix' => 'admin',
        'middleware' => 'auth',    
    ],
    
    function () {

        Route::get('users/{id}', function ($id) {
            dd(\Request::route()->parameters());
            return $id;
        });

    Route::get('complains/categories/create', 'ComplainCategoryController@create')
        ->name('create-category-form');
    Route::post('complains/categories/create', 'ComplainCategoryController@store')
        ->name('create-category');
    Route::post('complains/categories/create-sub', 'ComplainCategoryController@storeSubcategory')
        ->name('create-subcategory');
        
    Route::get('complains', 'ComplainController@index')
        ->name('complains');
    Route::get('complains/{category}', 'ComplainController@index');
    Route::get('complains/{category}/{subcategory}', 'ComplainController@index');
 
    Route::get('external-links/create',"ExternalLinkController@create")
        ->name('links-form');
    Route::post('external-links/create',"ExternalLinkController@store")
        ->name('create-links');
    Route::get('social-links/create',"ExternalLinkController@createSocial")
        ->name('social-form');
    Route::post('social-links/create',"ExternalLinkController@storeSocial")
        ->name('create-social');

    Route::get('about-cg-police', "AboutPoliceController@show");
    Route::get('about-cg-police/update', "AboutPoliceController@edit")
        ->name('cgp-form');
    Route::post('about-cg-police/update', "AboutPoliceController@update")
        ->name('update-about-cgp');

    Route::get('faqs/create', "FaqsController@create")
                ->name('faqs-form');
    Route::post('faqs/create', "FaqsController@store")
                ->name('update-faqs');
    
});

//publicly visible link
Route::get('about-cg-police', 'AboutPoliceController@show');

//Route::view('create-category', "admin.complain.create_category");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
