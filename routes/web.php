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
// Admin Pages
Route::get('dashboard', 'AdminController@dashboard');

Route::get('blogSingle', 'PagesController@blogSingle');
Route::get('blogList', 'PagesController@blogList');
Route::get('andBeyond', 'PagesController@andBeyond');
Route::get('loyaltyMembership', 'PagesController@loyaltyMembership');
Route::get('cosmicQuest', 'PagesController@cosmicQuest');
Route::get('leaderboardRanking', 'PagesController@leaderboardRanking');
Route::get('foodMenuSched', 'PagesController@foodMenuSched');
Route::get('contactUs', 'PagesController@contactUs');
Route::get('aboutUs', 'PagesController@aboutUs');
Route::get('bridge-command', 'PagesController@bridgeCommand');
Route::get('the-crew', 'PagesController@theCrew');
Route::get('esports-team', 'PagesController@esportsTeam');
Route::get('/', 'PagesController@index');