<?php


Route::prefix('/admin')->group(function(){
	Route::get('/','Admin\DashboardController@getDashboard');
	Route::get('/users','Admin\UserController@getUsers');
	// Usuarios/Editar
	Route::get('/users/{id}/edit', 'Admin\UserController@getUsersEdit' );
	Route::post('/users/{id}/edit', 'Admin\UserController@postUsersEdit' );
	Route::get('/users/{id}/delete', 'Admin\UserController@getUsersDelete');

	//Module Products
	Route::get('/products', 'Admin\ProductController@getHome');
	Route::get('/product/add', 'Admin\ProductController@getProductAdd');
	Route::get('/product/{id}/edit', 'Admin\ProductController@getProductEdit');
	Route::post('/product/{id}/edit', 'Admin\ProductController@postProductEdit');
	Route::post('/product/add', 'Admin\ProductController@postProductAdd');


	// Categories
	Route::get('/categories/{module}', 'Admin\CategoriesController@getHome' );
	Route::post('/category/add', 'Admin\CategoriesController@postCategoryAdd' );
	// Categories/Editar
	Route::get('/category/{id}/edit', 'Admin\CategoriesController@getCategoryEdit' );
	Route::post('/category/{id}/edit', 'Admin\CategoriesController@postCategoryEdit' );
	Route::get('/category/{id}/delete', 'Admin\CategoriesController@getCategoryDelete' );
});
