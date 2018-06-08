<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\News;
use Response;
use Validator;

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
		$news->image = 'public/uploads/featured_news/'.$name;
		$news->description = $request->txt_news_details;
		$news->option = $request->txt_news_options;
		$news->updated_at = null;

		$news->save();

		return response()->json($news);
		
	}
}
