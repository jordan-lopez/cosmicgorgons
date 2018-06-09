<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\News;

class NewsController extends Controller
{
    //
    public function ajaxStore(Request $request){
    	
    	if(Input::file('txt_news_image'))
	       {
	           $file = Input::file('txt_news_image');
	           $name=time().$file->getClientOriginalName();
	           $file->move(public_path().'/uploads/featured_news/', $name);
	       }

		$news = new News;

		$news->title = $request->txt_news_name;
		$news->image = 'uploads/featured_news/'.$name;
		$news->description = $request->txt_news_details;
		$news->option = $request->txt_news_options;
		$news->updated_at = null;

		$news->save();

		return response()->json($name);
		
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

		$news = News::find ( $request->hdn_edit_featured_news_id );

		$news->title = $request->edit_txt_news_name;
		$news->image = $image;
		$news->description = $request->edit_txt_news_details;
		$news->option = $request->edit_txt_news_options;

		$news->save();

		return response()->json($news);
		
	}

	public function ajaxDelete(Request $request){
    	
		News::find($request->hdn_delete_featured_news_id)->delete();

		return response()->json();
		
	}

}
