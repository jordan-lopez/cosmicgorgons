<?php

namespace App\Http\Controllers;

use App\News;
use App\FoodMenu;
use App\Blog;

class AdminController extends Controller {
	public function dashboard() {
		return view('dashboard')->with(array('page' => 'Dashboard'));
	}

	public function manageFoodMenu() {
		$data = FoodMenu::all();
		return view('manage_food_menu')->with(array('page' => 'Manage Menu', 'data' => $data));
	}

	public function featuredNews() {
		$news = News::all();
		return view('featured_news')->with(array('page' => 'Featured News','news'=>$news));
	}

	public function manageDailySchedule() {
		return view('manage_daily_schedule')->with(array('page' => 'Manage Daily Schedule & Promo'));
	}

	public function blog() {
		return view('blog')->with(array('page' => 'Blog'));
	}

	public function createBlog() {
		$blog = Blog::all();
		return view('create_blog')->with(array('page' => 'Create Blog', 'blog' => $blog));
	}

	public function editBlog($slug) {
		$blog = Blog::where('slug', $slug)->first();
		return view('edit-blog')->with(array('page' => 'Edit Blog', 'blog' => $blog));
	}

	public function category() {
		return view('category')->with(array('page' => 'Category'));
	}
}