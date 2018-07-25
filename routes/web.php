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

Route::get('/', [
    'uses' => 'Home\\HomeMainController@home',
    'as' => 'front.home'
]);


Route::get('/contact', [
    'uses' => 'Home\\HomeMainController@contact',
    'as' => 'front.contact'
]);

Route::get('/about', [
    'uses' => 'Home\\HomeMainController@about',
    'as' => 'front.about'
]);

Route::get('/services', [
    'uses' => 'Home\\HomeMainController@services',
    'as' => 'front.services'
]);

Route::get('/insights', [
    'uses' => 'Home\\HomeMainController@insights',
    'as' => 'front.insights'
]);

Route::get('/learning', [
    'uses' => 'Home\\HomeMainController@learning',
    'as' => 'front.learning'
]);

Route::get('/jobs', [
    'uses' => 'Home\\HomeMainController@jobs',
    'as' => 'front.jobs'
]);

Route::get('/events', [
    'uses' => 'Home\\HomeMainController@events',
    'as' => 'front.events'
]);

Route::post('/send-message', [
    'uses' => 'Home\\HomeMainController@sendMessage',
    'as' => 'front.send-message'
]);

Route::post('/newsletter', [
    'uses' => 'Home\\HomeMainController@newsletterSubscribe',
    'as' => 'front.newsletter'
]);

Route::post('/join-the-team', [
    'uses' => 'Home\\HomeMainController@joinTheTeam',
    'as' => 'join-the-team'
]);

Route::get('/test', function (){
    return "Hello World!!!";
});

