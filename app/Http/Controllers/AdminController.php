<?php

namespace App\Http\Controllers;

class AdminController extends Controller {
	public function dashboard() {
		return view('dashboard')->with(array('page' => 'Dashboard'));
	}

	public function manageFoodMenu() {
		return view('manage_food_menu')->with(array('page' => 'Manage Menu'));
	}

	public function featuredNews() {
		return view('featured_news')->with(array('page' => 'Featured News'));
	}
}