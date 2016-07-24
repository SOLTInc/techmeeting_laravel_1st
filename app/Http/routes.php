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

//　記事一覧画面
Route::get('/', 'ListController@index');

//　記事一覧削除
Route::get('delete/{id}', 'ListController@delete');

// 記事投稿画面
Route::get('input', 'PostController@index');

// 記事投稿POST
Route::post('post', 'PostController@post');

// 記事詳細画面
Route::get('detail/{id}', 'DetailController@index');
