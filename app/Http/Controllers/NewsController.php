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

        function YoutubeID($url)
	    {
	        if(strlen($url) > 11)
	        {
	            if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match))
	            {
	                return $match[1];
	            }
	            else
	                return false;
	        }

	        return $url;
	    }

        if(Input::file('image'))
	       {
	          $file = Input::file('image');
	          $name=time().$file->getClientOriginalName();
	          $file->move(public_path().'/uploads/featured_news/', $name);
	       }

		$news = new News;
		$news->title = $request->title;
		$news->image = 'uploads/featured_news/'.$name;
		$news->youtube_link = YoutubeID($request->youtube_link);
		$news->description = $request->description;
		$news->option = $request->txt_news_options;
		$news->updated_at = null;

		$news->save();

		return response()->json(['success'=>'Added successfully.']);
		
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
                      .$row->description.'" data-option="'.$row->option.'" data-youtube-link="'.$row->youtube_link.'"
                      ><div class="s-18 icon-pencil"></div></button>&nbsp;<button type="button" 
                      class="btn btn-primary btn-sm" data-toggle= "modal" data-target="#delete_featured_news_modal"
                      data-id="'.$row->id.'" data-title="'.$row->title.'"><div class="s-18 icon-trash-o"></div></
                      button></td>';

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

	    function YoutubeID($url)
	    {
	        if(strlen($url) > 11)
	        {
	            if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match))
	            {
	                return $match[1];
	            }
	            else
	                return false;
	        }

	        return $url;
	    }

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
		$news->youtube_link = YoutubeID($request->edit_youtube_link);
		$news->description = $request->description;
		$news->option = $request->edit_txt_news_options;

		$news->save();

		return response()->json(['success'=>'Updated successfully.']);
		
	}

	public function ajaxDelete(Request $request){
    	
		News::find($request->hdn_delete_featured_news_id)->delete();

		return response()->json();
		
	}

	public function checkTitle(Request $request){
		
		$news = News::where('title', Input::get('title'))->first();
	   	if ($news) {
	        return response()->json(FALSE);
	   	} else {
	        return response()->json(TRUE);
	    }	
	}

}
