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
                    <h4 class="card-title">Food Menu</h4>
                    <small class="card-subtitle mb-2 text-muted">Items purchase by users.</small>
                </div>
                <div class="collapse show" id="salesCard">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover earning-box">
                                <thead class="bg-light">
                                <tr>
                                    <th colspan="2">Client Name</th>
                                    <th>Item Purchased</th>
                                    <th>Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="w-10"><span class="round">
                                        <img src="{{ asset('/img/dummy/u1.png') }}" alt="user"></span>
                                    </td>
                                    <td>
                                        <h6>Sara Kamzoon</h6>
                                        <small class="text-muted">Marketing Manager</small>
                                    </td>
                                    <td>25</td>
                                    <td>$250</td>
                                </tr>
                                <tr>
                                    <td class="w-10"><span class="round">
                                        <img src="{{ asset('/img/dummy/u2.png') }}" alt="user"></span>
                                    </td>
                                    <td>
                                        <h6>Sara Kamzoon</h6>
                                        <small class="text-muted">Marketing Manager</small>
                                    </td>
                                    <td>25</td>
                                    <td>$250</td>
                                </tr>
                                <tr>
                                    <td class="w-10"><span class="round">
                                        <img src="{{ asset('/img/dummy/u3.png') }}" alt="user"></span>
                                    </td>
                                    <td>
                                        <h6>Sara Kamzoon</h6>
                                        <small class="text-muted">Marketing Manager</small>
                                    </td>
                                    <td>25</td>
                                    <td>$250</td>
                                </tr>
                                <tr>
                                    <td class="w-10"><span class="round">
                                        <img src="{{ asset('/img/dummy/u4.png') }}" alt="user"></span>
                                    </td>
                                    <td>
                                        <h6>Sara Kamzoon</h6>
                                        <small class="text-muted">Marketing Manager</small>
                                    </td>
                                    <td>25</td>
                                    <td>$250</td>
                                </tr>
                                <tr>
                                    <td class="w-10"><span class="round">
                                        <img src="{{ asset('/img/dummy/u5.png') }}" alt="user"></span>
                                    </td>
                                    <td>
                                        <h6>Sara Kamzoon</h6>
                                        <small class="text-muted">Marketing Manager</small>
                                    </td>
                                    <td>25</td>
                                    <td>$250</td>
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
                <h4 class="modal-title">Add New Menu</h4>
            </div>
            <form action="dashboard2.html ">
            <div class="modal-body no-p">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-40">
                            <div class="form-group">
                                <label for="txt_food_name" class="control-label">Food Name:*</label>
                                <input type="text" class="form-control" id="txt_food_name" name="txt_food_name" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="txt_food_details" class="control-label">Description:</label>
                                <input type="text" class="form-control" id="txt_food_details" name="txt_food_details" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="txt_food_price" class="control-label">Price:*</label>
                                <input type="text" class="form-control" id="txt_food_price" name="txt_food_price" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="txt_food_icon" class="control-label">Icon:*</label>
                                <input type="file" class="form-control" id="txt_food_icon" name="txt_food_icon" autocomplete="off">
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