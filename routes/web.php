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