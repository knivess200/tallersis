<?php


Route::prefix('/admin')->group(function(){
	Route::get('/','Admin\DashboardController@getDashboard')->name('dashboard');
	Route::get('/users','Admin\UserController@getUsers')->name('user_list');
	// Usuarios/Editar
	Route::get('/users/{id}/edit', 'Admin\UserController@getUsersEdit' )->name('user_edit');
	Route::post('/users/{id}/edit', 'Admin\UserController@postUsersEdit' )->name('user_edit');
	Route::get('/users/{id}/delete', 'Admin\UserController@getUsersDelete')->name('user_delete');

	//Module Products
	Route::get('/products', 'Admin\ProductController@getHome')->name('products');
	Route::get('/product/add', 'Admin\ProductController@getProductAdd')->name('product_add');
	Route::get('/product/{id}/edit', 'Admin\ProductController@getProductEdit')->name('product_edit');
	Route::post('/product/{id}/edit', 'Admin\ProductController@postProductEdit')->name('product_edit');
	Route::post('/product/add', 'Admin\ProductController@postProductAdd')->name('product_add');
	Route::post('/product/{id}/gallery/add', 'Admin\ProductController@postProductGalleryAdd')->name('product_gallery_add');
	Route::get('/product/{id}/gallery/{gid}/delete', 'Admin\ProductController@getProductGalleryDelete')->name('product_gallery_delete');

	// Categories
	Route::get('/categories/{module}', 'Admin\CategoriesController@getHome' )->name('categories');
	Route::post('/category/add', 'Admin\CategoriesController@postCategoryAdd' )->name('category_add');
	// Categories/Editar
	Route::get('/category/{id}/edit', 'Admin\CategoriesController@getCategoryEdit' )->name('category_edit');
	Route::post('/category/{id}/edit', 'Admin\CategoriesController@postCategoryEdit' )->name('category_edit');
	Route::get('/category/{id}/delete', 'Admin\CategoriesController@getCategoryDelete' )->name('category_delete');
});
