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
Route::get('/', 'PostsController@dashboard')->name('dashboard')->middleware('frontuser');
Route::get('/featured', 'PostsController@featured')->name('featured')->middleware('frontuser');
Route::get('/latest', 'PostsController@latest')->name('latest')->middleware('frontuser');
Route::get('/news', 'PostsController@news')->name('news')->middleware('frontuser');
Route::get('/askQuestion', 'PostsController@ask_qus')->name('askQuestion')->middleware('frontuser');
Route::post('/askQuestion', 'PostsController@ask_qus')->name('askQuestion');
Route::get('/story', 'PostsController@user_story')->name('story')->middleware('frontuser');
Route::post('/story', 'PostsController@user_story')->name('story');
Route::get('/createPoll', 'PostsController@create_poll')->name('createPoll')->middleware('frontuser');
Route::post('/createPoll', 'PostsController@create_poll')->name('createPoll');
Route::get('/createNews', 'PostsController@create_news')->name('createNews')->middleware('frontuser');
Route::post('/createNews', 'PostsController@create_news')->name('createNews');
Route::post('/editor_img', 'PostsController@editor_img')->name('editor_img');
Route::get('/get_tags', 'PostsController@get_tags')->name('get_tags');
Route::post('/postcomment', 'PostsController@post_comment')->name('postcomment');
Route::get('/delete_action', 'PostsController@delete_action')->name('delete_action');
Route::post('/like_unlike', 'PostsController@like_unlike')->name('like_unlike');
Route::post('/user_likes', 'PostsController@user_likes')->name('user_likes');
Route::get('/get_post', 'PostsController@get_post')->name('get_post');
Route::get('/detail_post', 'PostsController@detail_post')->name('detail_post');
Route::post('/report_post', 'PostsController@report_post')->name('report_post');
// UsersController
Route::get('/auth_user', 'UsersController@index')->name('auth_user');
Route::get('/checklogout', 'UsersController@checklogout')->name('checklogout');
Route::get('/check_log', 'UsersController@check_log')->name('check_log');
Route::get('/users', 'UsersController@user_listing')->name('users')->middleware('frontuser');
Route::get('/detail/{id}', 'UsersController@detail')->name('detail')->middleware('frontuser');
Route::get('/onboarding', 'UsersController@onboarding')->name('onboarding')->middleware('frontuser');
Route::get('/onboarding_status', 'UsersController@onboarding_status')->name('onboarding_status')->middleware('frontuser');
//-----------------------
Route::get('/home/verify', 'HomeController@verify')->name('verify');
Route::get('/groups', 'GroupsController@groups')->name('groups')->middleware('frontuser');
Route::post('/follow_unfollow_tag', 'FollowsController@follow_unfollow_tag')->name('follow_unfollow_tag');
Route::get('post/detail/{id}', 'PostsController@detail');
Route::get('/test', 'Auth\LoginController@test')->name('test');
//TagsController-----------------------------
Route::get('/group/{slag}', 'GroupsController@dashboard')->name('tag_dashboard')->middleware('frontuser');


//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


//Auth::routes();
Route::get('/admin', function(){
})->middleware('auth', 'admin');
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


    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard')->middleware('auth', 'adminuser');
    //Route::get('acheck', 'AdminController@acheck')->name('acheck');
    Route::resource('groups','GroupsController')->middleware('auth','adminuser');
    Route::resource('posts','AdminpostController')->middleware('auth','adminuser');
    Route::get('setFeatured','AdminpostController@setFeatured')->name('setFeatured')->middleware('auth','adminuser');
    Route::resource('categories','CategoryController')->middleware('auth','adminuser');



});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
