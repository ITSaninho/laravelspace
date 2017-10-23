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

Route::match(['get','post'],'/{page?}',['uses'=>'IndexController@index','as'=>'post', 'only' => 'index'])->where('page','[0-9]+');
//Route::get('post/{post_alias}',['uses'=>'PostController@index','as'=>'post'])->where('post_alias','[\w-]+');
//Route::match(['get','post'],'/post/{post_alias}',['uses'=>'PostController@index','as'=>'post'])->where('post_alias','[\w-]+');
Route::match(['get'],'/post/{post_alias}',['uses'=>'PostController@index','as'=>'post'])->where('post_alias','[\w-]+');
Route::match(['post'],'/post/{post_alias}',['uses'=>'PostController@addComment','as'=>'post'])->where('post_alias','[\w-]+');
Route::get('solar_systems/{solar_systems}/{page?}',['uses'=>'Solar_systemsController@index','as'=>'solar_systems'])->where(['solar_systems'=>'[\w-]+'],['page'=>'[0-9]+']);
Route::get('planets/{planets}/{page?}',['uses'=>'PlanetsController@index','as'=>'planets'])->where(['planets'=>'[\w-]+'],['page'=>'[0-9]+']);
Route::get('online_camera/{page?}',['uses'=>'Online_cameraController@index','as'=>'online_camera'])->where('page','[0-9]+');
Route::get('photo/{page?}',['uses'=>'PhotoController@index','as'=>'photo'])->where('page','[0-9]+');
Route::get('video/{page?}',['uses'=>'VideoController@index','as'=>'video'])->where('page','[0-9]+');
Route::get('news/{page?}',['uses'=>'NewsController@index','as'=>'news'])->where('page','[0-9]+');
Route::match(['get'],'contacts',['uses'=>'ContactsController@index','as'=>'contacts']);
Route::match(['post'],'contacts',['uses'=>'ContactsController@addMessage','as'=>'contacts']);
//Route::post('send-mail', 'MailSetting@send_form');
Route::get('category/{category}/{page?}',['uses'=>'CategoryController@index','as'=>'category'])->where(['category'=>'[\w-]+'],['page'=>'[0-9]+']);
//Route::get('post/{category}/{post_alias}',['uses'=>'CategotyPostController@index','as'=>'category_post'])->where('post_alias','[\w-]+');
//Route::get('post/{category_alias}',['uses'=>'CategoryController@index','as'=>'category'])->where('category_alias','[\w-]+');

//Route::resource('comment','CommentController',['only'=>['store']]);
Route::get('photo',['uses'=>'PhotoController@index','as'=>'photo'])->where(['page'=>'[0-9]+']);

Route::get('video/{page?}',['uses'=>'VideoController@index','as'=>'video'])->where(['page'=>'[0-9]+']);
Route::match(['get'],'/video/{video}',['uses'=>'VideoController@store'])->where('video','[[0-9]+');

Route::get('camera/{page?}',['uses'=>'Online_cameraController@index','as'=>'camera'])->where(['page'=>'[0-9]+']);
Route::match(['get'],'/camera/{camera}',['uses'=>'Online_cameraController@store'])->where('camera','[0-9]+');





Route::get('users',['uses'=>'ProfileController@index','as'=>'users']);
Route::get('profile/{id}',['uses'=>'ProfileController@show', 'as'=> 'profile'])->where(['id'=>'[0-9]+']);
Route::get('profile/edit/{id}',['uses'=>'ProfileController@edit','as'=>'profile_edit'])->where(['id'=>'[0-9]+']);
Route::post('profile/edit/{id}',['uses'=>'ProfileController@update'])->where(['id'=>'[0-9]+']);

Route::get('profile/message',['uses'=>'MessageController@show','as'=>'message_list']);
Route::get('profile/message/{dialog}',['uses'=>'MessageController@showDialog','as'=>'message_dialog'])->where(['dialog'=>'[0-9]+']);
Route::post('profile/message/{dialog}',['uses'=>'MessageController@store'])->where(['dialog'=>'[0-9]+']);


//Реєстрація, авторизація
Route::auth();
//Route::get('login','Auth\AuthController@showLoginForm');
//Route::post('login','Auth\AuthController@login');
//Route::get('logout','Auth\AuthController@logout');
//Route::get('registration','Auth\AuthController@registration');

//Адмінка
Route::group(['prefix'=>'admin', 'middleware' => ['admin','auth']],   function() {
// только для админа


    Route::get('/',['uses' => 'Admin\IndexController@index','as' => 'adminIndex']);

    //Route::resource('/news','Admin\NewsController');


    Route::resource('/photo','Admin\PhotoController');
    Route::get('/photo/{content}',['uses'=>'Admin\PhotoController@show','as'=>'admin_photo_show_id'])->where(['content'=>'[\w-]+']);
    Route::get('/photo/create',['uses'=>'Admin\PhotoController@create','as'=>'admin_photo_create']);
    Route::post('/photo/create',['uses'=>'Admin\PhotoController@store']);
    Route::get('/photo/edit/{id}',['uses'=>'Admin\PhotoController@edit','as'=>'admin_photo_edit'])->where(['id'=>'[0-9]+']);
    Route::post('/photo/edit/{id}',['uses'=>'Admin\PhotoController@update'])->where(['id'=>'[0-9]+']);
    Route::get('/photo/delete/{id}',['uses'=>'Admin\PhotoController@delete', 'as'=>'admin_photo_delete'])->where(['id'=>'[0-9]+']);



    Route::resource('/online_camera','Admin\Online_cameraController');
    Route::get('/online_camera/{content}',['uses'=>'Admin\Online_cameraController@show','as'=>'admin_online_camera_show_id'])->where(['content'=>'[\w-]+']);
    Route::get('/online_camera/create',['uses'=>'Admin\Online_cameraController@create','as'=>'admin_online_camera_create']);
    Route::post('/online_camera/create',['uses'=>'Admin\Online_cameraController@store']);
    Route::get('/online_camera/edit/{id}',['uses'=>'Admin\Online_cameraController@edit','as'=>'admin_online_camera_edit'])->where(['id'=>'[0-9]+']);
    Route::post('/online_camera/edit/{id}',['uses'=>'Admin\Online_cameraController@update'])->where(['id'=>'[0-9]+']);
    Route::get('/online_camera/delete/{id}',['uses'=>'Admin\Online_cameraController@delete', 'as'=>'admin_online_camera_delete'])->where(['id'=>'[0-9]+']);



    Route::resource('/posts','Admin\PostsController');
    Route::get('/posts/{content}',['uses'=>'Admin\PostsController@show','as'=>'admin_posts_show_id'])->where(['content'=>'[\w-]+']);
    Route::get('/posts/create',['uses'=>'Admin\PostsController@create','as'=>'admin_posts_create']);
    Route::post('/posts/create',['uses'=>'Admin\PostsController@store']);
    Route::get('/posts/edit/{id}',['uses'=>'Admin\PostsController@edit','as'=>'admin_posts_edit'])->where(['id'=>'[0-9]+']);
    Route::post('/posts/edit/{id}',['uses'=>'Admin\PostsController@update'])->where(['id'=>'[0-9]+']);
    Route::get('/posts/delete/{id}',['uses'=>'Admin\PostsController@delete', 'as'=>'admin_posts_delete'])->where(['id'=>'[0-9]+']);


    Route::resource('/users','Admin\UsersController');
    Route::get('/users/{content}',['uses'=>'Admin\UsersController@show','as'=>'admin_users_show_id'])->where(['content'=>'[\w-]+']);
    Route::get('/users/create',['uses'=>'Admin\UsersController@create','as'=>'admin_users_create']);
    Route::post('/users/create',['uses'=>'Admin\UsersController@store']);
    Route::get('/users/edit/{id}',['uses'=>'Admin\UsersController@edit','as'=>'admin_users_edit'])->where(['id'=>'[0-9]+']);
    Route::post('/users/edit/{id}',['uses'=>'Admin\UsersController@update'])->where(['id'=>'[0-9]+']);
    Route::get('/users/delete/{id}',['uses'=>'Admin\UsersController@delete', 'as'=>'admin_users_delete'])->where(['id'=>'[0-9]+']);


    Route::resource('/category','Admin\CategoryController');
    Route::get('/category/{content}',['uses'=>'Admin\CategoryController@show','as'=>'admin_category_show_id'])->where(['content'=>'[\w-]+']);
    Route::get('/category/create',['uses'=>'Admin\CategoryController@create','as'=>'admin_category_create']);
    Route::post('/category/create',['uses'=>'Admin\CategoryController@store']);
    Route::get('/category/edit/{id}',['uses'=>'Admin\CategoryController@edit','as'=>'admin_category_edit'])->where(['id'=>'[0-9]+']);
    Route::post('/category/edit/{id}',['uses'=>'Admin\CategoryController@update'])->where(['id'=>'[0-9]+']);
    Route::get('/category/delete/{id}',['uses'=>'Admin\CategoryController@delete', 'as'=>'admin_category_delete'])->where(['id'=>'[0-9]+']);


    Route::resource('/contacts','Admin\ContactsController');
    Route::get('/contacts/{content}',['uses'=>'Admin\MessageController@show','as'=>'admin_messages_show_id'])->where(['content'=>'[\w-]+']);
    Route::get('/contacts/edit/{id}',['uses'=>'Admin\MessageController@edit','as'=>'admin_messages_edit'])->where(['id'=>'[0-9]+']);
    Route::post('/contacts/edit/{id}',['uses'=>'Admin\MessageController@update'])->where(['id'=>'[0-9]+']);
    //Route::get('/contacts/delete/{id}',['uses'=>'Admin\MessageController@delete', 'as'=>'admin_messages_delete'])->where(['id'=>'[0-9]+']);




    Route::resource('/messages','Admin\MessageController');
    Route::get('/messages/{content}',['uses'=>'Admin\MessageController@show','as'=>'admin_messages_show_id'])->where(['content'=>'[\w-]+']);
    Route::get('/messages/create',['uses'=>'Admin\MessageController@create','as'=>'admin_messages_create']);
    Route::post('/messages/create',['uses'=>'Admin\MessageController@store']);
    Route::get('/messages/edit/{id}',['uses'=>'Admin\MessageController@edit','as'=>'admin_messages_edit'])->where(['id'=>'[0-9]+']);
    Route::post('/messages/edit/{id}',['uses'=>'Admin\MessageController@update'])->where(['id'=>'[0-9]+']);
    Route::get('/messages/delete/{id}',['uses'=>'Admin\MessageController@delete', 'as'=>'admin_messages_delete'])->where(['id'=>'[0-9]+']);




    Route::resource('/comments','Admin\CommentsController');
    Route::get('/comments/{content}',['uses'=>'Admin\CommentsController@show','as'=>'admin_comments_show_id'])->where(['content'=>'[\w-]+']);
    Route::get('/comments/create',['uses'=>'Admin\CommentsController@create','as'=>'admin_comments_create']);
    Route::post('/comments/create',['uses'=>'Admin\CommentsController@store']);
    Route::get('/comments/edit/{id}',['uses'=>'Admin\CommentsController@edit','as'=>'admin_comments_edit'])->where(['id'=>'[0-9]+']);
    Route::post('/comments/edit/{id}',['uses'=>'Admin\CommentsController@update'])->where(['id'=>'[0-9]+']);
    Route::get('/comments/delete/{id}',['uses'=>'Admin\CommentsController@delete', 'as'=>'admin_comments_delete'])->where(['id'=>'[0-9]+']);




    Route::resource('/rols','Admin\RolsController');
    Route::get('/rols/{content}',['uses'=>'Admin\RolsController@show','as'=>'admin_rols_show_id'])->where(['content'=>'[\w-]+']);
    Route::get('/rols/create',['uses'=>'Admin\RolsController@create','as'=>'admin_rols_create']);
    Route::post('/rols/create',['uses'=>'Admin\RolsController@store']);
    Route::get('/rols/edit/{id}',['uses'=>'Admin\RolsController@edit','as'=>'admin_rols_edit'])->where(['id'=>'[0-9]+']);
    Route::post('/rols/edit/{id}',['uses'=>'Admin\RolsController@update'])->where(['id'=>'[0-9]+']);
    Route::get('/rols/delete/{id}',['uses'=>'Admin\RolsController@delete', 'as'=>'admin_rols_delete'])->where(['id'=>'[0-9]+']);



    //Route::resource('/profile','Admin\ProfileController');


    Route::resource('/feedback','Admin\FeedbackController');
    Route::get('/feedback/{content}',['uses'=>'Admin\FeedbackController@show','as'=>'admin_feedback_show_id'])->where(['content'=>'[\w-]+']);
    Route::get('/feedback/create',['uses'=>'Admin\FeedbackController@create','as'=>'admin_feedback_create']);
    Route::post('/feedback/create',['uses'=>'Admin\FeedbackController@store']);
    Route::get('/feedback/edit/{id}',['uses'=>'Admin\FeedbackController@edit','as'=>'admin_feedback_edit'])->where(['id'=>'[0-9]+']);
    Route::post('/feedback/edit/{id}',['uses'=>'Admin\FeedbackController@update'])->where(['id'=>'[0-9]+']);
    Route::get('/feedback/delete/{id}',['uses'=>'Admin\FeedbackController@delete', 'as'=>'admin_feedback_delete'])->where(['id'=>'[0-9]+']);



    //Route::resource('/planets','Admin\PlanetsController');
    //Route::resource('/solar_systems','Admin\Solar_systemsController');


});


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
