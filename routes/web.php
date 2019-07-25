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
    return view('welcome');
});


Route::get(
    'pt', 
    array(
            'uses' => 'PascalTriangleController@fresh_pascal_triangle', 
            'as' => 'fresh-pascal-triangle'
        )
    );


Route::get(
        'pascal-triangle', 
        array(
                'uses' => 'PascalTriangleController@index', 
                'as' => 'view-pascal-triangle'
            )
        );


Route::post(
    'post-pascal-triangle', 
    array(
            'uses' => 'PascalTriangleController@store', 
            'as' => 'post-pascal-triangle'
        )
    );