<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function index() {
		return view('index')->with(array('page' => 'Home'));
	}

	public function aboutUs() {
		return view('about_us')->with(array('page' => 'About Us'));
	}

	public function contactUs() {
		return view('contact_us')->with(array('page' => 'Contact Us'));	
	}

	public function foodMenuSched() {
		return view('food_menu_sched')->with(array('page' => 'Food Menu, Schedule & Promos'));
	}

	public function leaderboardRanking() {
		return view('leaderboard_ranking')->with(array('page' => 'Leaderboards & Rankings'));
	}

	public function cosmicQuest() {
		return view('cosmic_quest')->with(array('page' => 'Cosmic Quest'));	
	}

	public function loyaltyMembership() {
		return view('membership')->with(array('page' => 'Loyalty & Membership'));
	}

	public function andBeyond() {
		return view('and_beyond')->with(array('page' => 'And Beyond'));
	}

	public function blogList() {
		return view('blog_list')->with(array('page' => 'Blog List'));
	}

	public function blogSingle() {
		return view('blog_single')->with(array('page' => 'Blog Single'));
	}

	public function bridgeCommand() {
		return view('bridge_command')->with(array('page' => 'Bridge Command'));
	}

	public function theCrew() {
		return view('the_crew')->with(array('page' => 'The Crew'));
	}

	public function esportsTeam() {
		return view('esports_team')->with(array('page' => 'ESPORTS Team'));
	}
}