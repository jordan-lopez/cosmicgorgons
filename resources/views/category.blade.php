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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_category_modal">Add New</button>
                    </div>
                    <h4 class="card-title">Category</h4>
                </div>
                <div class="collapse show" id="salesCard">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover earning-box" id="tbl-category">
                                <thead class="bg-light">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
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
  <div class="modal fade" id="add_category_modal" tabindex="-1" role="dialog" aria-labelledby="addCategory">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content no-r ">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" aria-label="Close" class="paper-nav-toggle active"><i></i></a>
                <h4 class="modal-title">Add New Category</h4>
            </div>
            <form id="frm-add-category" method="post" name="frm_add_category">
                <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                <div class="modal-body no-p">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-40">
                                <div class="form-group has-error">
                                    <label for="txt_category_name" class="control-label">Name:*</label>
                                    <input type="text" class="form-control" id="txt_category_name" name="name" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" id="btn-add-category" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="edit_category_modal" tabindex="-1" role="dialog" aria-labelledby="editCategory">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content no-r ">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" aria-label="Close" class="paper-nav-toggle active"><i></i></a>
                <h4 class="modal-title">Edit Category</h4>
            </div>
            <form id="frm-edit-category" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                <input type="hidden" name="hdn_edit_category_id" id="hdn_edit_category_id">
                <div class="modal-body no-p">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-40">
                                <div class="form-group has-error">
                                    <label for="txt_category_name" class="control-label">Name:*</label>
                                    <input type="text" class="form-control" id="edit_txt_category_name" name="name" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" id="btn-edit-category" class="btn btn-primary" style="width: 100px;">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="delete_category_modal" tabindex="-1" role="dialog" aria-labelledby="deleteCategory">
    <div class="modal-dialog" role="document">
        <div class="modal-content no-r ">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" aria-label="Close" class="paper-nav-toggle active"><i></i></a>
                <h4 class="modal-title">Delete Category</h4>
            </div>
            <form id="frm-delete-category" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                <input type="hidden" name="hdn_delete_category_id" id="hdn_delete_category_id">
                <div class="modal-body no-p">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-40" id="category_name">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" id="btn-delete-category" class="btn btn-primary">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('/js/pages/category.js') }}"></script>
<script src="{{ asset('/plugins/jquery-validation/dist/jquery.validate.js') }}"></script>
@endsection