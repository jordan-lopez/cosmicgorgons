<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\FoodMenu;

class ManageMenuController extends Controller
{ 

	public function ajaxStore(Request $request) {
		if(Input::file('txt_food_image'))
	       {
	          $file = Input::file('txt_food_image');
	          $name= time().$file->getClientOriginalName();
	          $file->move(public_path().'/uploads/food_menus/', $name);
	       }

		$food_menu = new FoodMenu;

		$food_menu->name = $request->txt_food_name;
		$food_menu->description = $request->txt_food_details;
		$food_menu->price = $request->txt_food_price;
		$food_menu->category = $request->slct_food_category;
		$food_menu->image = 'uploads/food_menus/'.$name;
		$food_menu->updated_at = null;

		$food_menu->save();

		return response()->json($food_menu);
	}

	public function ajaxUpdate(Request $request) {
		if(Input::file('txt_edit_food_image'))
	       {
	          $file = Input::file('txt_edit_food_image');
	          $name= time().$file->getClientOriginalName();
	          $file->move(public_path().'/uploads/food_menus/', $name);
	       }

		$food_menu = FoodMenu::find($request->hdn_food_id);

		$food_menu->name = $request->txt_edit_food_name;
		$food_menu->description = $request->txt_edit_food_details;
		$food_menu->price = $request->txt_edit_food_price;
		$food_menu->category = $request->slct_edit_food_category;
		$food_menu->image = 'uploads/food_menus/'.$name;

		$food_menu->save();

		return response()->json($food_menu);
	}

	public function ajaxDestroy(Request $request) {
		$food_menu = FoodMenu::find($request->hdn_delete_food_id);

		$food_menu->delete();
    return response()->json($food_menu);
	}
}
