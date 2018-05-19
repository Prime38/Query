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



Route::get('/badges', ['as' => 'badges', 'uses' => 'IndexController@badges']);
Route::get('/index_2', ['as' => 'index_2', 'uses' => 'IndexController@index_2']);
Route::get('/sign-up', ['as' => 'signup', 'uses' => 'IndexController@signup']);
Route::get('/ask', ['as' => 'ask', 'uses' => 'IndexController@ask']);
Route::get('/test','HomeController@test');

Route::auth();

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@home']);
Route::get('/users', ['as' => 'users', 'uses' => 'HomeController@users']);
Route::get('/questions', ['as' => 'questions', 'uses' => 'HomeController@questions']);
Route::get('/question_detail',['as' => 'q_detail','uses' => 'HomeController@q_detail']);
Route::post('/ask/submit','HomeController@submit_ask');
Route::post('/ans/submit','HomeController@submit_ans');
Route::post('/job/submit','HomeController@job_submit');
Route::get('/job_detail','HomeController@job_detail');



Route::post('/ques/search','HomeController@q_search');
Route::post('/job/search','HomeController@j_search');
Route::post('/user/search','HomeController@u_search');


Route::get('/inbox', ['as' => 'inbox', 'uses' => 'HomeController@inbox']);
Route::post('/send/message',['as' => 'message','uses' => 'HomeController@message']);
Route::get('/reply','HomeController@reply');
Route::get('/account', ['as' => 'account', 'uses' => 'HomeController@account']);

Route::get('/job', ['as' => 'job', 'uses' => 'HomeController@jobs']);
Route::get('/job/query','HomeController@job_query');


Route::get('/ques_vote/{aid}/{qid}','HomeController@a_vote');
Route::get('/ques_vote/{qid}','HomeController@q_vote');
Route::get('/cancel_ques_vote/{qid}','HomeController@cancel_q_vote');
Route::auth();
