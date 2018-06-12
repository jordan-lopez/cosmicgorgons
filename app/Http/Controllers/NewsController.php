<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\News;
use Validator;

class NewsController extends Controller
{
    //
    public function ajaxStore(Request $request){

	    $validator = Validator::make($request->all(), [
            'title' => 'required|unique:featured_news',
            'description' => 'required',
            'image' => 'required',
        ]);   

        if ($validator->fails()) {
        	return response()->json(['error'=>$validator->getMessageBag()->toArray()]);
        } else {
        	if(Input::file('image'))
	       	{
	           $file = Input::file('image');
	           $name=time().$file->getClientOriginalName();
	           $file->move(public_path().'/uploads/featured_news/', $name);
	       	}
			$news = new News;

			$news->title = $request->title;
			$news->image = 'uploads/featured_news/'.$name;
			$news->description = $request->description;
			$news->option = $request->txt_news_options;
			$news->updated_at = null;

			$news->save();

			return response()->json(['success'=>'Added successfully.']);
		}
	
	}

	public function ajaxShow(Request $request){
    	
    	$news = News::all();
    	$data = array();

    	foreach($news as $row) {
    		$image = '<td class="w-10"><span class="round">
                      <div class="thumbnail"><img src="'.$row->image.'" alt="user"></div></span>
                      </td>';
            $title = '<h6>'.$row->title.'</h6>
                      <small class="text-muted">'.$row->option.'</small>
                      </td>';
            $description = '<td>'.$row->description.'</td>';
            $button = '<td><button type="button" class="btn btn-primary btn-sm btn_edit_featured_news" 
                      data-toggle="modal" data-target="#edit_featured_news_modal" data-id="'.$row->id.'
                      " data-image="'.$row->image.'" data-title="'.$row->title.'" data-description="'
                      .$row->description.'" data-option="'.$row->option.'"><div class="s-18 icon-pencil"></div>
                      </button>&nbsp;<button type="button" class="btn btn-primary btn-sm" data-toggle=
                      "modal" data-target="#delete_featured_news_modal" data-id="'.$row->id.'" data-title="'.$row->title.'"><div class="s-18 icon-trash-o"></div></button></td>';

    		$data[] = array(
                    $image,
                    $title,
                    $description,
                    $button
            );
    	}

    	$output = array(
            "data" => $data
        );

		return response()->json($output);
		
	}

	public function ajaxUpdate(Request $request){

		$news = News::find($request->hdn_edit_featured_news_id);

		if ($news->id == $request->hdn_edit_featured_news_id && $news->title == $request->title) {
			if(Input::file('edit_txt_news_image'))
		    {
		        $file = Input::file('edit_txt_news_image');
		        $name=time().$file->getClientOriginalName();
		        $file->move(public_path().'/uploads/featured_news/', $name);
		        $image = 'uploads/featured_news/'.$name;
		    }
		    else {
		    	$image = $request->hdn_edit_image;
		    }

			$news->title = $request->title;
			$news->image = $image;
			$news->description = $request->description;
			$news->option = $request->edit_txt_news_options;

			$news->save();

			return response()->json(['success'=>'Updated successfully.']);
		} else {
			$validator = Validator::make($request->all(), [
	            'title' => 'required|unique:featured_news',
	            'description' => 'required',
	        ]);

	        if ($validator->fails()) {
	        	return response()->json(['error'=>$validator->getMessageBag()->toArray()]);
	        } 
		}
		
	}

	public function ajaxDelete(Request $request){
    	
		News::find($request->hdn_delete_featured_news_id)->delete();

		return response()->json();
		
	}

}
