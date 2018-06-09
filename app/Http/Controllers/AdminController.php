<?php

namespace App\Http\Controllers;

use App\News;

class AdminController extends Controller {
	public function dashboard() {
		return view('dashboard')->with(array('page' => 'Dashboard'));
	}

	public function manageFoodMenu() {
		return view('manage_food_menu')->with(array('page' => 'Manage Menu'));
	}

	public function featuredNews() {
		$news = News::all();
		return view('featured_news')->with(array('page' => 'Featured News','news'=>$news));
	}
}