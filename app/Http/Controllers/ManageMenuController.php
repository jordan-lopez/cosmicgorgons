<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\FoodMenu;

class ManageMenuController extends Controller
{ 
	public function ajaxShow(Request $request) {
		$food_menu = FoodMenu::all();
		$data = array();

  	foreach($food_menu as $row) {
			$image =	'<td class="w-10"><span class="round">
		              <img src="'.$row->image.'" alt="user"></span>
		            </td>';
      $name = 	'<td>
	                <h6>'.$row->name.'</h6>
	             	</td>';
      $description = '<td>'.$row->description.'</td>';
      $price =	'<td>&#8369;'.number_format($row->price, 2).'</td>';
      $category = '<td>'.$row->category.'</td>';
      $button = '<td>
                    <a id="btn-edit-food-menu" class="btn-fab btn-success r5 white-text" data-id="'. $row->id.'" data-name="'.$row->name.'" data-description="'.$row->description.'" data-price="'.$row->price.'" data-category="'.$row->category.'" data-image="'.$row->image.'" data-toggle="modal" data-target="#modal-edit-food-menu">
                        <i class="icon-edit"></i>
                    </a>
                    <a id="btn-delete-food-menu" class="btn-fab btn-danger r5 white-text" data-id="'.$row->id.'" data-name="'.$row->name.'" data-toggle="modal" data-target="#modal-delete-food-menu">
                        <i class="icon-trash"></i>
                    </a>
                </td>';

  		$data[] = array(
                  $image,
                  $name,
                  $description,
                  $price,
                  $category,
                  $button
      );
  	}

  	$output = array(
      "data" => $data
    );

		return response()->json($output);
	}

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

	public function ajaxShowFoodMenu(Request $request) {
		$food_menu = FoodMenu::all();

		return response()->json($food_menu);
	}
}
