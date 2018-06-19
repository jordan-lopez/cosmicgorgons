@extends('layout.admin_master')

@section('stylesheets')
<link rel="stylesheet" href="{{ asset('/plugins/jQuery-Tags-Input-master/src/jquery.tagsinput.css') }}">
<style type="text/css">
    div.tagsinput {
        width: 100% !important;
    }
    .error {
        color: red !important;
        border-color: red !important;
    }
</style>
@endsection
@section('content')
<div class="page light">
    <div class="content-wrapper animatedParent animateOnce">
        <div class="container">
            <form id="frm-edit-blog" method="post" enctype="multipart/form-data" name="frm_edit_blog">
                {{ csrf_field() }}
                <input type="text" class="form-control" id="hdn_edit_blog_slug" name="hdn_edit_blog_slug" value="{{ $slug }}"> 
                <input type="text" class="form-control" id="hdn_edit_blog_id" name="hdn_edit_blog_id" value="{{ $blog->id }}">
                <div class="row p-t-20">
                    <div class="col-lg-8">
                        <div class="p-40 border r-3 white">
                            <div class="form-group">
                                <label for="title" class="control-label">Title:*</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $title }}" autocomplete="off" required>   
                                <hr>                    
                                <textarea id="content" name="content" required>{{ $content }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="p-40 border r-3 white">
                            <div class="form-group">
                                <label for="tags" class="control-label">Tags:</label><br>
                                <input type="text" class="form-control" id="tags" name="tags" value="{{ $tags }}" autocomplete="off">
                                <label for="image" class="control-label">Featured Image:*</label>
                                <input type="hidden" name="hdn_edit_image" id="hdn_edit_image" value="{{ $image }}">
                                <input type="file" class="form-control" id="image" name="image" autocomplete="off"><div class="thumbnail" id="thumbnail-edit"><img src="/{{ $image }}" id="image_preview" alt="user"></div> 
                                <hr>      
                                <button type="submit" id="btn-edit-blog" class="btn btn-primary">
                                    <span id="edit-spinner" class="s-15"> Update</span>
                                </button>                        
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
  {{-- modal here --}}


</div>
@endsection
@section('scripts')
<script src="{{ asset('/plugins/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('/js/pages/blogs.js') }}"></script>
<script src="{{ asset('/plugins/jquery-validation/dist/jquery.validate.js') }}"></script>
<script src="{{ asset('/plugins/jQuery-Tags-Input-master/src/jquery.tagsinput.js') }}"></script>
<script>
    CKEDITOR.replace('content');
    $('#tags').tagsInput();
</script>
@endsection