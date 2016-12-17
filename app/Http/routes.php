<?php

// AdminPanel 
Route::group(['prefix'=>'admin','middleware' => ['auth', 'admin']],  function () {

	// Dashboard
	Route::get('/', function() {
    	return view('admin.dashboard')->withTitle('Dashboard');
	});

	// Users Page
	Route::get('/users', 'UsersController@index');
	Route::get('/user/create', 'UsersController@create');
	Route::post('/user/create', 'UsersController@store');
	Route::get('/users/{id}/edit', 'UsersController@edit');
	Route::post('/users/{id}/edit', 'UsersController@update');
	Route::post('/users/{id}/delete', 'UsersController@destroy')->name('user.delete');

	// Categories Page
	Route::get('/categories', 'CategoriesController@index');
	Route::get('/category/create', 'CategoriesController@create');
	Route::post('/category/create', 'CategoriesController@store');
	Route::get('/categories/{id}/edit', 'CategoriesController@edit');
	Route::post('/categories/{id}/edit', 'CategoriesController@update');
	Route::post('/categories/{id}/delete', 'CategoriesController@destroy')->name('category.delete');

	// Posts Page
	Route::get('/posts', 'PostsController@index');
	Route::get('/post/create', 'PostsController@create');
	Route::post('/post/create', 'PostsController@store');
	Route::get('/posts/{id}/edit', 'PostsController@edit');
	Route::post('/posts/{id}/edit', 'PostsController@update');
	Route::post('/posts/{id}/delete', 'PostsController@destroy')->name('post.delete');

});

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
   	Route::get('/', 'HomePageController@index');
   	Route::get('/{category}', 'HomePageController@category');
   	Route::get('/{category}/{post}', 'HomePageController@post');
});


Route::auth();
Route::auth();

Route::get('/home', 'HomeController@index');
