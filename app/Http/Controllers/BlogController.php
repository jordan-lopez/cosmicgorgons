<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Blog;
use Validator;

class BlogController extends Controller
{
    //
    public function ajaxCreate(Request $request){

	    $input = Input::all();
	    if($input['image'])
		   {
		      $file = $input['image'];
		      $name=time().$file->getClientOriginalName();
		      $file->move(public_path().'/uploads/blogs/', $name);
		   }

		$blog = new Blog();
			
		$blog->title = $input['title'];
		$blog->image = 'uploads/blogs/'.$name;
		$blog->content = $input['content'];
		$blog->category_id = 1;
		$blog->tags = $input['tags'];
		$blog->slug = str_slug($blog->title);
		$blog->updated_at = null;

		$blog->save();

		return response()->json(['success'=>'Added successfully.']);
		
    }

    public function ajaxShow(Request $request){
    	
    	$blog = Blog::all();
    	$data = array();

    	foreach($blog as $row) {
    		$image = '<td class="w-10"><span class="round">
                      <div class="thumbnail"><img src="'.$row->image.'" alt="user"></div></span>
                      </td>';

                      if ($row->tags == '') {
            			$title = '<h6>'.$row->title.'</h6>';
            		  }else{
            			$title = '<h6>'.$row->title.'</h6><small class="text-muted">TAGS: '.$row->tags.'</small>';
                 	  }
            			
                      '</td>';
            $author = '<td>ADMIN</td>';
            $button = '<td><a href="/blog/edit/'.$row->slug.'" class="btn btn-primary btn-sm btn_edit_featured_news" 
                      data-id="'.$row->id.'" data-image="'.$row->image.'" data-title="'.$row->title.'" 
                      data-description="'.$row->content.'"><div class="s-18 icon-pencil"></div></a>&nbsp;<button 
                      type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                      data-target="#delete_blog_modal" data-id="'.$row->id.'"
                      data-title="'.$row->title.'"><div class="s-18 icon-trash-o"></div></button></td>';

    		$data[] = array(
                    $image,
                    $title,
                    $author,
                    $button
            );
    	}

    	$output = array(
            "data" => $data
        );

		return response()->json($output);
		
	}

	public function ajaxUpdate(Request $request){

		$input = Input::all();
		$blog = Blog::findOrFail($input['hdn_edit_blog_id']);  

        if(Input::file('image'))
		   {
		       $file = $input['image'];
		       $name=time().$file->getClientOriginalName();
		       $file->move(public_path().'/uploads/blogs/', $name);
		       $image = 'uploads/blogs/'.$name;
		   }
		   else {
		    $image = $input['hdn_edit_image'];
		   }

		$blog->title = $input['title'];
		$blog->image = $image;
		$blog->content = $input['content'];
		$blog->category_id = 1;
		$blog->tags = $input['tags'];
		$blog->slug = str_slug($blog->title);

		$blog->save();

		return response()->json(['success'=>'Updated successfully.']);
		
	}

	public function ajaxDelete(Request $request){

		$input = Input::all();
		Blog::find($input['hdn_delete_blog_id'])->delete();

		return response()->json();
		
	}

	public function checkTitle(Request $request){
		
		$blog = Blog::where('title', Input::get('title'))->first();
	   	if ($blog) {
	        return response()->json(FALSE);
	   	} else {
	        return response()->json(TRUE);
	    }	
	}

}