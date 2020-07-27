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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [
    'uses' => 'WelcomeController@index',
    'as' => 'welcome_page'
]);

Route::get('about', function () {
    return view('about');
})->middleware('checking');

Auth::routes(['register' => false]);

Route::group(['middleware' => 'auth'], function(){

    Route::get('/post/create', [

        'uses' => 'PostsController@create',
        'as' => 'post.create'
    ]);
    
    Route::post('/blogs/store', [

        'uses' => 'PostsController@store',
        'as' => 'blogs.store'
    ]);

    Route::get('/blogs/delete/{id}', [

        'uses' => 'PostsController@destroy',
        'as' => 'blogs.delete'
    ]);

    Route::get('/blogs/edit/{id}', [

        'uses' => 'PostsController@edit',
        'as' => 'blogs.edit'
    ]);

    Route::post('/blogs/update/{id}', [

        'uses' => 'PostsController@update',
        'as' => 'blogs.update'
    ]);


    Route::get('/posts', [
    
        'uses' => 'PostsController@index',
        'as' => 'posts'
    ]);
});

Route::get('register', function () {

    return redirect('/login');
});

Route::get('home', function () {

    return redirect('/');
});


