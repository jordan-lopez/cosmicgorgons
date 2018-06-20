<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Category;

class CategoryController extends Controller
{
    //
    public function checkName(Request $request){
		
		$category = Category::where('name', Input::get('name'))->first();
	   	if ($category) {
	        return response()->json(FALSE);
	   	} else {
	        return response()->json(TRUE);
	    }	
	}

    public function ajaxShow(Request $request){
    	
    	$category = Category::all();
    	$data = array();

    	foreach($category as $row) {
    		$id = '<td>'.$row->id.'</td>';
            $name = '<td>'.$row->name.'</td>';
            $button = '<td><button type="button" class="btn btn-primary btn-sm btn_edit_category" 
                      data-toggle="modal" data-target="#edit_category_modal" 
                      data-id="'.$row->id.'" data-name="'.$row->name.'"><div class="s-18 icon-pencil"></div></button>&nbsp;<button 
                      type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                      data-target="#delete_category_modal" data-id="'.$row->id.'"
                      data-name="'.$row->name.'"><div class="s-18 icon-trash-o"></div></button></td>';

    		$data[] = array(
    				$id,
                    $name,
                    $button
            );
    	}

    	$output = array(
            "data" => $data
        );

		return response()->json($output);
		
	}

	public function ajaxStore(Request $request){

	    $input = Input::all();

		$category = new Category();
			
		$category->name = $input['name'];
		$category->updated_at = null;

		$category->save();

		return response()->json(['success'=>'Added successfully.']);
		
    }

    public function ajaxUpdate(Request $request){

    	$input = Input::all();

		$category = Category::find($request->hdn_edit_category_id);  

		$category->name = $input['name'];

		$category->save();

		return response()->json(['success'=>'Updated successfully.']);
		
	}

	public function ajaxDelete(Request $request){

		$input = Input::all();
		Category::find($input['hdn_delete_category_id'])->delete();

		return response()->json();
		
	}
}
