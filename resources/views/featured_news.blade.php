@extends('layout.admin_master')

@section('stylesheets')
<style type="text/css">
    .error {
        color: red !important;
        border-color: red !important;
    }
</style>
@endsection
@section('content')
<div class="content-wrapper animatedParent animateOnce">
  <div class="container-fluid">
    <div class="row p-t-20">
        <div class="col-md-12">
            <div class="card no-b">
                <div class="card-header white b-0 p-3">
                    <div class="card-handle">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_featured_news_modal">Add New</button>
                    </div>
                    <h4 class="card-title">Events</h4>
                    <small class="card-subtitle mb-2 text-muted">Monthly and weekly events.</small>
                </div>
                <div class="collapse show" id="salesCard">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover earning-box" id="tbl-featured-news">
                                <thead class="bg-light">
                                <tr>
                                    <th>Name</th>
                                    <th></th>
                                    <th>Description</th>
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
  <div class="modal fade" id="add_featured_news_modal" tabindex="-1" role="dialog" aria-labelledby="addFeaturedNews">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content no-r ">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" aria-label="Close" class="paper-nav-toggle active"><i></i></a>
                <h4 class="modal-title">Add New Event</h4>
            </div>
            <form id="frm-add-event" method="post" enctype="multipart/form-data" name="frm_add_event">
                <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                <div class="modal-body no-p">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-40">
                                <div class="form-group has-error">
                                    <label for="txt_news_name" class="control-label">Title:*</label>
                                    <input type="text" class="form-control" id="txt_news_name" name="title" autocomplete="off">
                                    <small class="error_title text-danger" hidden></small>
                                </div>
                                <div class="form-group">
                                    <label for="txt_news_details" class="control-label">Description:</label>
                                    <textarea class="form-control" rows="3" id="txt_news_details" name="description" autocomplete="off"></textarea>
                                    <small class="error_details text-danger" hidden></small>
                                </div>
                                <div class="form-group">
                                    <label for="txt_news_image" class="control-label">Image:*</label>
                                    <input type="file" class="form-control" id="txt_news_image" name="image" autocomplete="off">
                                    <small class="error_image text-danger" hidden></small>
                                </div>
                                <div class="form-group">
                                    <label for="txt_news_yt_link" class="control-label">Youtube Link:</label>
                                    <input type="text" class="form-control" id="txt_news_yt_link" name="youtube_link" autocomplete="off">
                                    <small class="error_yt_link text-danger" hidden></small>
                                </div>
                                <div class="form-group">
                                    <div class="col-xl-10">
                                        <div class="form-check">
                                            <label class="col-xl-6">
                                                <input name="txt_news_options" id="optionsRadios1" class="txt_news_options" value="Monthly Event" checked
                                                       type="radio">Monthly Event</label>
                                            <label class="col-xl-6">
                                                <input name="txt_news_options" id="optionsRadios2" class="txt_news_options" value="Weekly Event"
                                                       type="radio">Weekly Event</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" id="btn-add-news" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="edit_featured_news_modal" tabindex="-1" role="dialog" aria-labelledby="editFeaturedNews">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content no-r ">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" aria-label="Close" class="paper-nav-toggle active"><i></i></a>
                <h4 class="modal-title">Edit Event</h4>
            </div>
            <form id="frm-edit-event" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                <input type="hidden" name="hdn_edit_featured_news_id" id="hdn_edit_featured_news_id">
                <input type="hidden" name="hdn_edit_featured_news_date" id="hdn_edit_featured_news_date">
                <input type="hidden" name="hdn_edit_featured_news_yt" id="hdn_edit_featured_news_yt">
                <div class="modal-body no-p">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-40">
                                <div class="form-group has-error">
                                    <label for="txt_news_name" class="control-label">Title:*</label>
                                    <input type="text" class="form-control" id="edit_txt_news_name" name="title" autocomplete="off">
                                    <small class="error_edit_title text-danger" hidden></small>
                                </div>
                                <div class="form-group">
                                    <label for="txt_news_details" class="control-label">Description:</label>
                                    <textarea class="form-control" rows="3" id="edit_txt_news_details" name="description" autocomplete="off"></textarea>
                                    <small class="error_edit_details text-danger" hidden></small>
                                </div>
                                <div class="form-group">
                                    <label for="txt_news_image" class="control-label">Image:*</label>
                                    <input type="hidden" name="hdn_edit_image" id="hdn_edit_image">
                                    <input type="file" class="form-control" id="edit_txt_news_image" name="edit_txt_news_image" autocomplete="off"><br><div class="col-md-6 col-lg-4"><div class="thumbnail" id="image"></div></div>
                                </div>
                                <div class="form-group">
                                    <label for="txt_news_yt_link" class="control-label">Youtube Link:</label>
                                    <input type="text" class="form-control" id="edit_txt_news_yt_link" name="edit_youtube_link" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <div class="col-xl-10">
                                        <div class="form-check">
                                            <label class="col-xl-6">
                                                <input name="edit_txt_news_options" class="edit_txt_news_options" value="Monthly Event" type="radio">Monthly Event
                                            </label>
                                            <label class="col-xl-6">
                                                <input name="edit_txt_news_options" class="edit_txt_news_options" value="Weekly Event" type="radio">Weekly Event
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" id="btn-edit-news" class="btn btn-primary" style="width: 100px;">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="delete_featured_news_modal" tabindex="-1" role="dialog" aria-labelledby="deleteFeaturedNews">
    <div class="modal-dialog" role="document">
        <div class="modal-content no-r ">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" aria-label="Close" class="paper-nav-toggle active"><i></i></a>
                <h4 class="modal-title">Delete Event</h4>
            </div>
            <form id="frm-delete-event" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                <input type="hidden" name="hdn_delete_featured_news_id" id="hdn_delete_featured_news_id">
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
                    <button type="submit" id="btn-delete-news" class="btn btn-primary" style="width: 100px;">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('/js/pages/events.js') }}"></script>
<script src="{{ asset('/plugins/jquery-validation/dist/jquery.validate.js') }}"></script>
@endsection