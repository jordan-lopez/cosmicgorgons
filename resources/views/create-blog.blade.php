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
            <form id="frm-create-blog" method="post" enctype="multipart/form-data" name="frm_create_blog">
                {{ csrf_field() }}
                <div class="row p-t-20">
                    <div class="col-lg-8">
                        <div class="p-40 border r-3 white">
                            <div class="form-group">
                                <label for="title" class="control-label">Title:*</label>
                                <input type="text" class="form-control" id="title" name="title" autocomplete="off" required>   
                                <hr>                    
                                <textarea id="content" name="content" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="p-40 border r-3 white">
                            <div class="form-group">
                                <label for="tags" class="control-label">Tags:</label><br>
                                <input type="text" class="form-control" id="tags" name="tags" autocomplete="off">
                                <label for="image" class="control-label">Featured Image:*</label>
                                <input type="file" class="form-control" id="image" name="image" autocomplete="off" required>  
                                <hr>      
                                <button type="submit" id="btn-add-blog" class="btn btn-primary">
                                    <span id="add-spinner" class="s-15"> Publish</span>
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