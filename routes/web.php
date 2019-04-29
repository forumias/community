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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'PostsController@dashboard')->name('dashboard');
Route::get('/questions', 'PostsController@questions')->name('questions');
Route::get('/polls', 'PostsController@polls')->name('polls');
Route::get('/news', 'PostsController@news')->name('news');
Route::get('/askQuestion', 'PostsController@ask_qus')->name('askQuestion');
Route::post('/askQuestion', 'PostsController@ask_qus')->name('askQuestion');
Route::get('/story', 'PostsController@user_story')->name('story');
Route::post('/story', 'PostsController@user_story')->name('story');
Route::get('/createPoll', 'PostsController@create_poll')->name('createPoll');
Route::post('/createPoll', 'PostsController@create_poll')->name('createPoll');
Route::get('/createNews', 'PostsController@create_news')->name('createNews');
Route::post('/createNews', 'PostsController@create_news')->name('createNews');
Route::post('/editor_img', 'PostsController@editor_img')->name('editor_img');
Route::get('/get_tags', 'PostsController@get_tags')->name('get_tags');
Route::post('/postcomment', 'PostsController@post_comment')->name('postcomment');
Route::get('/delete_action', 'PostsController@delete_action')->name('delete_action');
Route::post('/like_unlike', 'PostsController@like_unlike')->name('like_unlike');
Route::post('/user_likes', 'PostsController@user_likes')->name('user_likes');
Route::get('/get_post', 'PostsController@get_post')->name('get_post');
// UsersController
Route::get('/auth_user', 'UsersController@index')->name('auth_user');
Route::get('/checklogout', 'UsersController@checklogout')->name('checklogout');
Route::get('/check_log', 'UsersController@check_log')->name('check_log');
Route::get('/users', 'UsersController@user_listing')->name('users');
Route::get('/detail/{id}', 'UsersController@detail')->name('detail');
//-----------------------
Route::get('/home/verify', 'HomeController@verify')->name('verify');
Route::get('/tags', 'TagsController@tags')->name('tags');
Route::post('/follow_unfollow_tag', 'FollowsController@follow_unfollow_tag')->name('follow_unfollow_tag');
Route::get('post/detail/{id}', 'PostsController@detail');
Route::get('/test', 'Auth\LoginController@test')->name('test');


//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


//Auth::routes();
Route::get('/admin', 'Auth\LoginController@showLoginForm')->name('login');
Route::prefix('admin')->group(function () {
    // front routes
    Auth::routes();
    
    // Authentication Routes...
    Route::get('admin', 'Auth\LoginController@showLoginForm')->name('login');
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    // Registration Routes...
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');

    // Password Reset Routes...
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');


    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('hashtags','TagsController');
    Route::resource('posts','PostsController');
    Route::resource('categories','CategoryController');



});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
