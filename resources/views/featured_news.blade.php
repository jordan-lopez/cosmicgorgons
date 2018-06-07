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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_new_food">Add New</button>
                    </div>
                    <h4 class="card-title">Events</h4>
                    <small class="card-subtitle mb-2 text-muted">Monthly and weekly events.</small>
                </div>
                <div class="collapse show" id="salesCard">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover earning-box">
                                <thead class="bg-light">
                                <tr>
                                    <th colspan="2">Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="w-10"><span class="round">
                                        <img src="{{ asset('/img/dummy/u1.png') }}" alt="user"></span>
                                    </td>
                                    <td>
                                        <h6>RageQuit – Tekken 7 Weeklies</h6>
                                        <small class="text-muted">Monthly Event</small>
                                    </td>
                                    <td>Come join us every Friday for some Tekken 7 Weeklies!
                                    Attempt to defeat our CG players, or take the crown for
                                    that week!</td>
                                    <td width="100">
                                        <button type="button" class="btn btn-primary btn-sm">
                                            <div class="s-18 icon-pencil"></div>
                                        </button>
                                        <button type="button" class="btn btn-primary btn-sm">
                                            <div class="s-18 icon-trash-o"></div>
                                        </button>
                                    </td>
                                </tr>
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
  <div class="modal fade" id="add_new_food" tabindex="-1" role="dialog" aria-labelledby="addNewFood">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content no-r ">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" aria-label="Close" class="paper-nav-toggle active"><i></i></a>
                <h4 class="modal-title">Add New Event</h4>
            </div>
            <form action="dashboard2.html ">
            <div class="modal-body no-p">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-40">
                            <div class="form-group">
                                <label for="txt_news_name" class="control-label">Name:*</label>
                                <input type="text" class="form-control" id="txt_news_name" name="txt_food_name" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="txt_news_details" class="control-label">Description:</label>
                                <input type="text" class="form-control" id="txt_news_details" name="txt_food_details" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="txt_news_image" class="control-label">Image:*</label>
                                <input type="file" class="form-control" id="txt_news_image" name="txt_food_icon" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <div class="col-xl-10">
                                    <div class="form-check">
                                        <label class="col-xl-6">
                                            <input name="txt_news_options" id="optionsRadios1" value="Monthly Event" checked
                                                   type="radio">Monthly Event</label>
                                        <label class="col-xl-6">
                                            <input name="txt_news_options" id="optionsRadios2" value="Weekly Event"
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
                <button type="button" id="btn-delete-confirm" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
@section('scripts')
@endsection