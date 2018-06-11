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
Route::post('delete-food-menu', 'ManageMenuController@ajaxDestroy');
Route::post('update-food-menu', 'ManageMenuController@ajaxUpdate');
Route::post('create-food-menu', 'ManageMenuController@ajaxStore');
Route::get('manage-food-menu', 'AdminController@manageFoodMenu');
Route::get('dashboard', 'AdminController@dashboard');
Route::get('featured-news', 'AdminController@featuredNews');
Route::post('featured-news/store', 'NewsController@ajaxStore');
Route::get('featured-news/show', 'NewsController@ajaxShow');
Route::post('featured-news/update', 'NewsController@ajaxUpdate');
Route::post('featured-news/delete', 'NewsController@ajaxDelete');

Route::get('blog-single', 'PagesController@blogSingle');
Route::get('blog-list', 'PagesController@blogList');
Route::get('and-beyond', 'PagesController@andBeyond');
Route::get('loyalty-membership', 'PagesController@loyaltyMembership');
Route::get('cosmic-quest', 'PagesController@cosmicQuest');
Route::get('leaderboard-ranking', 'PagesController@leaderboardRanking');
Route::get('food-menu-sched', 'PagesController@foodMenuSched');
Route::get('contact-us', 'PagesController@contactUs');
Route::get('about-us', 'PagesController@aboutUs');
Route::get('bridge-command', 'PagesController@bridgeCommand');
Route::get('the-crew', 'PagesController@theCrew');
Route::get('esports-team', 'PagesController@esportsTeam');
Route::get('/', 'PagesController@index');