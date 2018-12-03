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

Route::get('/',[
    'uses'=>'FrontEndController@index',
    'as'=>'index' 
]);
Route::get('/post/{slug}',[
    'uses'=>'FrontEndController@singlePost',
    'as'=>'post.single'
]);

/*
|to return rows from two table in relationships (1-M) | (M-M)
|
|Route::get('/test', function () {
|    return App\Tag::find(4)->posts ;
|});
|
*/
Auth::routes();


Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
    
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/post/create',[
        'uses'=>'PostController@create',
        'as' =>'post.create'
    ]);
    Route::post('/post/store',[
        'uses'=>'PostController@store',
        'as'=>'post.store'
    ]);
    Route::post('/post/update/{id}',[
        'uses'=>'PostController@update',
        'as'=>'post.update'
    ]);
    Route::get('/posts',[
        'uses'=>'PostController@index',
        'as'=>'posts'
    ]);
    Route::get('/posts/restore/{id}',[
        'uses'=>'PostController@restore',
        'as'=>'posts.restore'
    ]);
    Route::get('/posts/kill/{id}',[
        'uses'=>'PostController@kill',
        'as'=>'posts.kill'
    ]);
    Route::get('/post/edit/{id}',[
        'uses'=>'PostController@edit',
        'as'=>'post.kieditll'
    ]);
    Route::get('/posts/trashed',[
        'uses'=>'PostController@trashed',
        'as'=>'posts.trashed'
    ]);
    Route::get('/post/delete/{id}',[
        'uses'=>'PostController@destroy',
        'as'=>'post.delete'
    ]);
    Route::get('/category/create',[
        'uses' =>'CategoriesController@create',
        'as' =>'category.create'
    ]);
    Route::get('/categories',[
        'uses' =>'CategoriesController@index',
        'as' =>'categories'
    ]);
    Route::get('/category/edit/{id}',[
        'uses' =>'CategoriesController@edit',
        'as' =>'category.edit'
    ]);Route::get('/category/delete/{id}',[
        'uses' =>'CategoriesController@destroy',
        'as' =>'category.delete'
    ]);
    Route::post('/category/store',[
        'uses'=>'CategoriesController@store',
        'as'=>'category.store'
    ]);
    Route::post('/category/update/{id}',[
        'uses'=>'CategoriesController@update',
        'as'=>'category.update'
    ]);
    Route::get('/tags',[
        'uses'=>'TagsController@index',
        'as'=>'tags'
    ]);
    Route::get('/tag/create',[
        'uses'=>'TagsController@create',
        'as'=>'tag.create'
    ]);
    Route::get('/tag/store',[
        'uses'=>'TagsController@store',
        'as'=>'tag.store'
    ]);
    Route::get('/tag/edit/{id}',[
        'uses'=>'TagsController@edit',
        'as'=>'tag.edit'
    ]);
    Route::post ('/tag/update/{id}',[
        'uses'=>'TagsController@update',
        'as'=>'tag.update'
    ]);
    Route::get('/tag/delete/{id}',[
        'uses'=>'TagsController@destroy',
        'as'=>'tag.delete'
    ]);
    Route::get('/users',[
        'uses'=>'UsersController@index',
        'as'=>'users'
    ]);
    Route::get('/user/create',[
        'uses'=>'UsersController@create',
        'as'=>'user.create'
    ]);
    Route::post('/user/store',[
        'uses'=>'UsersController@store',
        'as'=>'user.store'
    ]);
    Route::get('/user/admin/{id}',[
        'uses'=>'UsersController@admin',
        'as'=>'user.admin'
    ]);
    Route::get('/user/not-admin/{id}',[
        'uses'=>'UsersController@not_admin',
        'as'=>'user.not.admin'
    ]);
    Route::get('user/delete/{id}',[
        'uses'=>'UsersController@destroy',
        'as'=>'user.delete'
    ]);

    Route::get('user/profile',[
        'uses'=>'ProfileController@index',
        'as'=>'user.profile'
    ]);
   
    Route::post('user/profile/update ',[
        'uses'=>'ProfileController@update',
        'as'=>'user.profile.update'
    ]);

    Route::get('/settings',[
        'uses'=>'SettingsController@index',
        'as'=>'settings'
    ]);
    Route::post('/settings/update',[
        'uses'=>'SettingsController@update',
        'as'=>'settings.update'
    ]);
});

