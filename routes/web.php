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
Route::get('food-menu-sched/show-daily-sched-promo', 'DailyScheduleAndPromoController@ajaxShowDailySchedulePromo');
Route::get('manage-daily-schedule-and-promo/show', 'DailyScheduleAndPromoController@ajaxShow');
Route::post('manage-daily-schedule-and-promo/delete', 'DailyScheduleAndPromoController@ajaxDestroy');
Route::post('manage-daily-schedule-and-promo/update', 'DailyScheduleAndPromoController@ajaxUpdate');
Route::post('manage-daily-schedule-and-promo/store', 'DailyScheduleAndPromoController@ajaxStore');
Route::get('manage-daily-schedule-and-promo', 'AdminController@manageDailySchedule');

Route::get('food-menu-sched/show', 'ManageMenuController@ajaxShowFoodMenu');
Route::get('manage-food-menu/show', 'ManageMenuController@ajaxShow');
Route::post('manage-food-menu/delete', 'ManageMenuController@ajaxDestroy');
Route::post('manage-food-menu/update', 'ManageMenuController@ajaxUpdate');
Route::post('manage-food-menu/store', 'ManageMenuController@ajaxStore');
Route::get('manage-food-menu', 'AdminController@manageFoodMenu');

Route::get('blog-show', 'BlogController@ajaxShow');
Route::get('blog', 'AdminController@blog');
Route::get('blog/create', 'AdminController@createBlog');
Route::get('blog/edit/{slug}', 'AdminController@editBlog')->name('edit-blog');
Route::post('blog/create', 'BlogController@ajaxCreate');
Route::post('blog/edit/{slug}', 'BlogController@ajaxUpdate');
Route::post('blog/delete', 'BlogController@ajaxDelete');
Route::get('check-title', 'BlogController@checkTitle');

Route::get('featured-news', 'AdminController@featuredNews');
Route::post('featured-news/store', 'NewsController@ajaxStore');
Route::get('featured-news/show', 'NewsController@ajaxShow');
Route::post('featured-news/update', 'NewsController@ajaxUpdate');
Route::post('featured-news/delete', 'NewsController@ajaxDelete');

Route::get('dashboard', 'AdminController@dashboard');

Route::get('blog/{slug}', 'PagesController@blogSingle');
Route::get('blogs', 'PagesController@blogList');
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