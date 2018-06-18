@extends('layout.admin_master')

@section('stylesheets')
@endsection
@section('content')
<div class="content-wrapper animatedParent animateOnce">
  <div class="container-fluid">
    <div class="row p-t-20">
        <div class="col-md-12">
            <div class="card no-b">
                <div class="card-header white b-0 p-3">
                    <div class="card-handle">
                        <a href="blog-create" class="btn btn-primary">Create</a>
                    </div>
                    <h4 class="card-title">Posts</h4>
                    <small class="card-subtitle mb-2 text-muted"></small>
                </div>
                <div class="collapse show" id="salesCard">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover earning-box" id="tbl-blog">
                                <thead class="bg-light">
                                <tr>
                                    <th>Name</th>
                                    <th></th>
                                    <th>Author</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  {{-- modal here --}}

<div class="modal fade" id="delete_blog_modal" tabindex="-1" role="dialog" aria-labelledby="deleteBlog">
    <div class="modal-dialog" role="document">
        <div class="modal-content no-r ">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" aria-label="Close" class="paper-nav-toggle active"><i></i></a>
                <h4 class="modal-title">Delete Post</h4>
            </div>
            <form id="frm-delete-event" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                <input type="hidden" name="hdn_delete_blog_id" id="hdn_delete_blog_id">
                <div class="modal-body no-p">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-40" id="event_title">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" id="btn-delete-news" class="btn btn-primary" style="width: 100px;"><span id="delete-spinner" class="s-15"> Delete</span></button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
@section('scripts')
<script>
    $('#tbl-blog').DataTable({
        "ajax": {
            url: "blog-show",
            type: 'GET'
        },
    });

    $(document).ready(function(){
        if(localStorage.getItem("Status"))
        {
            $.toast({
                heading: 'Success',
                text: 'Created successfully.',
                position: 'top-right',
                loaderBg: '#ff6849',
                icon: 'success',
                hideAfter: 3500
            });
            localStorage.clear();
        }
    });
</script>
@endsection