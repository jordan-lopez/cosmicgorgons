@extends('layout.admin_master')

@section('stylesheets')
<style type="text/css">
    /* .dropzone {
        border: 2px dashed #0087F7;
        background: white;
        border-radius: 5px;
        min-height: 100px;
        padding: 90px 0;
        vertical-align: baseline;
    } */
    input.my-error-class, select.my-error-class {
        border-color:#FF0000;  /* red */
    }

    label.my-error-class {
        color:#FF0000;  /* red */
    }
    label.my-valid-class {
        color:#00CC00; /* green */
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
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add-schedule-promo" id="btn-add-schedule">Add New</button>
                        </div>
                        <h4 class="card-title">Daily Schedule & Promo</h4>
                        <small class="card-subtitle mb-2 text-muted">Manage the daily schedule.</small>
                    </div>
                    <div class="collapse show" id="salesCard">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover" id="tbl-daily-sched-promo">
                                    <thead class="bg-light">
                                        <tr>
                                            <th>Day</th>
                                            <th>Event/Promo</th>
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
    {{-- Modals here --}}
    <div class="modal fade" id="modal-add-schedule-promo" tabindex="-1" role="dialog" aria-labelledby="addScheduleAndPromo">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content no-r ">
                <div class="modal-header">
                    <a href="#" data-dismiss="modal" aria-label="Close" class="paper-nav-toggle active"><i></i></a>
                    <h4 class="modal-title">Add New Schedule & Promo</h4>
                </div>
                <form method="POST" action="{{ url('/manage-daily-schedule-and-promo/store') }}" enctype="multipart/form-data" id="frm-add-schedule-promo" name="frm_add_schedule_promo">
                    {{ csrf_field() }}
                    <div class="modal-body no-p">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-40">
                                    <div class="form-group">
                                        <label for="txt-schedule-day" class="control-label">Day:*</label>
                                        <input type="text" class="form-control" id="txt-schedule-day" name="txt_schedule_day" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="txt-event-promo" class="control-label">Event/Promo*:</label>
                                        <input type="text" class="form-control" id="txt-event-promo" name="txt_event_promo" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="btn-add">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-edit-schedule-promo" tabindex="-1" role="dialog" aria-labelledby="editScheduleAndPromo">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content no-r ">
                <div class="modal-header">
                    <a href="#" data-dismiss="modal" aria-label="Close" class="paper-nav-toggle active"><i></i></a>
                    <h4 class="modal-title">Edit Schedule & Promo</h4>
                </div>
                <form method="POST" action="{{ url('/manage-daily-schedule-and-promo/update') }}" enctype="multipart/form-data" id="frm-edit-schedule-promo" name="frm_edit_schedule_promo">
                    {{ csrf_field() }}
                    <div class="modal-body no-p">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-40">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="hdn_schedule_promo_id" id="hdn-schedule-promo-id">
                                        <label for="txt-edit-schedule-day" class="control-label">Day:*</label>
                                        <input type="text" class="form-control" id="txt-edit-schedule-day" name="txt_edit_schedule_day" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="txt-edit-event-promo" class="control-label">Event/Promo*:</label>
                                        <input type="text" class="form-control" id="txt-edit-event-promo" name="txt_edit_event_promo" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="btn-edit">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-delete-schedule-promo" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content no-r ">
                <div class="modal-header">
                    <a href="#" data-dismiss="modal" aria-label="Close" class="paper-nav-toggle active"><i></i></a>
                    <h4 class="modal-title">Delete Schedule & Promo</h4>
                </div>
                <form method="POST" action="{{ url('/manage-daily-schedule-and-promo/delete') }}" enctype="multipart/form-data" id="frm-delete-schedule-promo">
                    {{ csrf_field() }}
                    <div class="modal-body no-p">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-40">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="hdn-delete-schedule-promo-id" name="hdn_delete_schedule_promo_id" autocomplete="off">
                                        <p>Are you sure you want to remove "<strong><span id="schedule-promo-day"></span></strong>" from the Daily Schedule?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="btn-delete">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- End Modals --}}
</div>
@endsection
@section('scripts')
<script src="{{ asset('/plugins/jquery-validation/dist/jquery.validate.js') }}"></script>
<script src="{{ asset('/js/pages/daily_schedule_and_promo.js') }}"></script>
@endsection