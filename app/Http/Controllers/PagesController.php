<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function index() {
		return view('index')->with(array('page' => 'Home'));
	}

	public function aboutUs() {
		return view('about-us')->with(array('page' => 'About Us'));
	}

	public function contactUs() {
		return view('contact-us')->with(array('page' => 'Contact Us'));	
	}

	public function foodMenuSched() {
		return view('food-menu-sched')->with(array('page' => 'Food Menu, Schedule & Promos'));
	}

	public function leaderboardRanking() {
		return view('leaderboard-ranking')->with(array('page' => 'Leaderboards & Rankings'));
	}

	public function cosmicQuest() {
		return view('cosmic-quest')->with(array('page' => 'Cosmic Quest'));	
	}

	public function loyaltyMembership() {
		return view('membership')->with(array('page' => 'Loyalty & Membership'));
	}

	public function andBeyond() {
		return view('and-beyond')->with(array('page' => 'And Beyond'));
	}

	public function blogList() {
		return view('blog-list')->with(array('page' => 'Blog List'));
	}

	public function blogSingle() {
		return view('blog-single')->with(array('page' => 'Blog Single'));
	}

	public function bridgeCommand() {
		return view('bridge-command')->with(array('page' => 'Bridge Command'));
	}

	public function theCrew() {
		return view('the-crew')->with(array('page' => 'The Crew'));
	}

	public function esportsTeam() {
		return view('esports-team')->with(array('page' => 'ESPORTS Team'));
	}
}