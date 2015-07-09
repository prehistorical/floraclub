<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

//АДМИНКА-----------------------------------------------------------------------------------------------------------

Route::group(['middleware' => 'auth', 'prefix' => 'adm'], function()
{

    Route::get('/',                                 ['as' => 'display_main_admin', 'uses' => 'DisplayAdminController@displayIndex']);

    Route::get('/create/init',                      ['as' => 'create_init', 'uses' => 'CreateAdminController@createInit']);

    //Для групп внутри блоков:
    Route::get('/create/groupitem/{block}',         ['as' => 'create_groupitem', 'uses' => 'CreateAdminController@createGroupItem']);

    //Сохранение
    Route::post('/save/block',              ['as' => 'save_block', 'uses' => 'SaveAdminController@saveBlock']);
    Route::post('/save/groupitem',          ['as' => 'save_groupitem', 'uses' => 'SaveAdminController@saveGroupItem']);

    //Удаление
    Route::delete('/delete/groupitem/{block}',      ['as' => 'delete_groupitem', 'uses' => 'DeleteAdminController@deleteGroupItem']);


    Route::post('/uploadimage', 'ImageFileController@postImage');

});
