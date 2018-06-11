@extends('layout.admin_master')

@section('stylesheets')
<link rel="stylesheet" href="{{ asset('/plugins/dropzone-master/dist/dropzone.css') }}">
{{-- <style type="text/css">
    .dropzone {
        border: 2px dashed #0087F7;
        background: white;
        border-radius: 5px;
        min-height: 100px;
        padding: 90px 0;
        vertical-align: baseline;
    }
</style> --}}
@endsection
@section('content')
<div class="content-wrapper animatedParent animateOnce">
    <div class="container-fluid">
        <div class="row p-t-20">
            <div class="col-md-12">
                <div class="card no-b">
                    <div class="card-header white b-0 p-3">
                        <div class="card-handle">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add-food-menu" id="btn-add-food-menu">Add New</button>
                        </div>
                        <h4 class="card-title">Food Menu</h4>
                        <small class="card-subtitle mb-2 text-muted">Items purchase by users.</small>
                    </div>
                    <div class="collapse show" id="salesCard">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover" id="tbl-food-menu">
                                    <thead class="bg-light">
                                        <tr>
                                            <th colspan="2">Food Name</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Category</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $food)
                                        <tr>
                                            <td class="w-10"><span class="round">
                                                <img src="{{ asset($food->image) }}" alt="user"></span>
                                            </td>
                                            <td>
                                                <h6>{{ $food->name }}</h6>
                                            </td>
                                            <td>{{ $food->description }}</td>
                                            <td>&#8369;{{ number_format($food->price, 2) }}</td>
                                            <td>{{ $food->category }}</td>
                                            <td>
                                                <a id="btn-edit-food-menu" class="btn-fab btn-success r5 white-text" data-id="{{ $food->id }}" data-name="{{ $food->name }}" data-description="{{ $food->description }}" data-price="{{ $food->price }}" data-category="{{ $food->category }}" data-image="{{ $food->image }}" data-toggle="modal" data-target="#modal-edit-food-menu">
                                                    <i class="icon-edit"></i>
                                                </a>
                                                <a id="btn-delete-food-menu" class="btn-fab btn-danger r5 white-text" data-id="{{ $food->id }}" data-name="{{ $food->name }}" data-toggle="modal" data-target="#modal-delete-food-menu">
                                                    <i class="icon-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
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
    <div class="modal fade" id="modal-add-food-menu" tabindex="-1" role="dialog" aria-labelledby="addNewFood">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content no-r ">
                <div class="modal-header">
                    <a href="#" data-dismiss="modal" aria-label="Close" class="paper-nav-toggle active"><i></i></a>
                    <h4 class="modal-title">Add New Menu</h4>
                </div>
                <form method="POST" action="{{ url('/create-food-menu') }}" enctype="multipart/form-data" id="frm-add-food-menu">
                    {{ csrf_field() }}
                    <div class="modal-body no-p">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-40">
                                    <div class="form-group">
                                        <label for="txt-food-name" class="control-label">Food Name:*</label>
                                        <input type="text" class="form-control" id="txt-food-name" name="txt_food_name" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="txt-food-details" class="control-label">Description:</label>
                                        <input type="text" class="form-control" id="txt-food-details" name="txt_food_details" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="txt-food-price" class="control-label">Price:*</label>
                                        <input type="text" class="form-control" id="txt-food-price" name="txt_food_price" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="slct-food-category" class="control-label">Category*</label>
                                        <select class="form-control" id="slct-food-category" name="slct_food_category">
                                            <option selected="selected"></option>
                                            <option value="Snack">Snack</option>
                                            <option value="Rice Meal">Rice Meal</option>
                                            <option value="Drink">Drink</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="txt-food-image" class="control-label">Image:*</label>
                                        <input type="file" class="form-control" id="txt-food-image" name="txt_food_image" autocomplete="off">
                                        {{-- <div class="dropzone">
                                            <div class="dz-message">
                                                <div class="col-xs-8">
                                                    <div class="message">
                                                        <p>Drop files here or Click to Upload</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
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
    <div class="modal fade" id="modal-edit-food-menu" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content no-r ">
                <div class="modal-header">
                    <a href="#" data-dismiss="modal" aria-label="Close" class="paper-nav-toggle active"><i></i></a>
                    <h4 class="modal-title">Edit Menu</h4>
                </div>
                <form method="POST" action="{{ url('/update-food-menu') }}" enctype="multipart/form-data" id="frm-edit-food-menu">
                    {{ csrf_field() }}
                    <div class="modal-body no-p">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-40">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="hdn-food-id" name="hdn_food_id" autocomplete="off">
                                        <label for="txt-edit-food-name" class="control-label">Food Name:*</label>
                                        <input type="text" class="form-control" id="txt-edit-food-name" name="txt_edit_food_name" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="txt-edit-food-details" class="control-label">Description:</label>
                                        <input type="text" class="form-control" id="txt-edit-food-details" name="txt_edit_food_details" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="txt-edit-food-price" class="control-label">Price:*</label>
                                        <input type="text" class="form-control" id="txt-edit-food-price" name="txt_edit_food_price" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="slct-edit-food-category" class="control-label">Category*</label>
                                        <select class="form-control" id="slct-edit-food-category" name="slct_edit_food_category">
                                            <option selected="selected"></option>
                                            <option value="Snack">Snack</option>
                                            <option value="Rice Meal">Rice Meal</option>
                                            <option value="Drink">Drink</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="txt-edit-food-image" class="control-label">Image:*</label>
                                        <input type="file" class="form-control" id="txt-edit-food-image" name="txt_edit_food_image" autocomplete="off">
                                        {{-- <div class="dropzone">
                                            <div class="dz-message">
                                                <div class="col-xs-8">
                                                    <div class="message">
                                                        <p>Drop files here or Click to Upload</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
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
    <div class="modal fade" id="modal-delete-food-menu" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content no-r ">
                <div class="modal-header">
                    <a href="#" data-dismiss="modal" aria-label="Close" class="paper-nav-toggle active"><i></i></a>
                    <h4 class="modal-title">Delete Menu</h4>
                </div>
                <form method="POST" action="{{ url('/delete-food-menu') }}" enctype="multipart/form-data" id="frm-delete-food-menu">
                    {{ csrf_field() }}
                    <div class="modal-body no-p">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-40">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="hdn-delete-food-id" name="hdn_delete_food_id" autocomplete="off">
                                        <p>Are you sure you want to remove "<strong><span id="food-menu-name"></span></strong>" from the menu?</p>
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
<script src="{{ asset('/plugins/dropzone-master/dist/dropzone.js') }}"></script>
<script src="{{ asset('/plugins/jquery-validation/dist/jquery.validate.js') }}"></script>
<script src="{{ asset('js/pages/manage-food-menu.js') }}"></script>
@endsection