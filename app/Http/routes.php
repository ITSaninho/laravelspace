<?php


Route::match(['get','post'],'/{page?}',['uses'=>'IndexController@index','as'=>'post', 'only' => 'index'])->where('page','[0-9]+');
//Route::get('post/{post_alias}',['uses'=>'PostController@index','as'=>'post'])->where('post_alias','[\w-]+');
Route::match(['get','post'],'/post/{post_alias}',['uses'=>'PostController@index','as'=>'post'])->where('post_alias','[\w-]+');
Route::get('solar_systems/{page?}',['uses'=>'Solar_systemsController@index','as'=>'solar_systems'])->where('page','[0-9]+');
Route::get('planets/{page?}',['uses'=>'PlanetsController@index','as'=>'planets'])->where('page','[0-9]+');
Route::get('online_camera/{page?}',['uses'=>'Online_cameraController@index','as'=>'online_camera'])->where('page','[0-9]+');
Route::get('photo/{page?}',['uses'=>'PhotoController@index','as'=>'photo'])->where('page','[0-9]+');
Route::get('video/{page?}',['uses'=>'VideoController@index','as'=>'video'])->where('page','[0-9]+');
Route::get('news/{page?}',['uses'=>'NewsController@index','as'=>'news'])->where('page','[0-9]+');
Route::match(['get','post'],'/contacts',['uses'=>'ContactsController@index','as'=>'contacts']);
Route::get('category/{category}/{page?}','CategoryController',['only' => 'index'])->where(['category'=>'[\w-]+'],['page'=>'[0-9]+']);
//Route::get('post/{category}/{post_alias}',['uses'=>'CategotyPostController@index','as'=>'category_post'])->where('post_alias','[\w-]+');
//Route::get('post/{category_alias}',['uses'=>'CategoryController@index','as'=>'category'])->where('category_alias','[\w-]+');

Route::resource('profile','ProfileController');
//Route::resource('comment','CommentController',['only'=>['store']]);

//Реєстрація, авторизація
Route::get('login','Auth\AuthController@showLoginForm');
Route::post('login','Auth\AuthController@login');
Route::get('logout','Auth\AuthController@logout');

//Адмінка
Route::group(['prefix' => 'admin','middleware'=> 'auth'],function() {

    Route::get('/',['uses' => 'Admin\IndexController@index','as' => 'adminIndex']);
    Route::resource('/posts','Admin\PostsController');
    Route::resource('/news','Admin\NewsController');
    Route::resource('/photo','Admin\PhotoController');
    Route::resource('/online_camera','Admin\Online_cameraController');
    Route::resource('/users','Admin\UsersController');
    Route::resource('/contacts','Admin\ContactsController');
    Route::resource('/category','Admin\CategoryController');
    Route::resource('/planets','Admin\PlanetsController');
    Route::resource('/solar_systems','Admin\Solar_systemsController');
    Route::resource('/message','Admin\MessageController');
    Route::resource('/comments','Admin\CommentsController');
    Route::resource('/rols','Admin\RolsController');

});
