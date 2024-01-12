@extends('layouts.adminReal')

@section('content')

<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper breadcrumb-contacts">
            <div>
                <h1>Vendor List</h1>
                <p class="breadcrumbs">
                    <span><a href="index-2.html">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Vendor
                </p>
            </div>
            <div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addVendor"> Add Vendor
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="ec-vendor-list card card-default">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="responsive-data-table_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                <div class="row justify-content-between top-information">
                                    <div class="dataTables_length" id="responsive-data-table_length">
                                        <label>Show
                                            <select name="responsive-data-table_length" aria-controls="responsive-data-table" class="form-select form-select-sm">
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                                <option value="50">50</option>
                                                <option value="75">75</option>
                                                <option value="-1">All</option>
                                            </select>
                                        entries</label>
                                    </div>
                                    <div id="responsive-data-table_filter" class="dataTables_filter">
                                        <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="responsive-data-table"></label>
                                    </div>
                                </div>
                                <table id="responsive-data-table" class="table dataTable no-footer" aria-describedby="responsive-data-table_info">
                                    <thead>
                                        <tr>
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" style="width: 179px;" aria-sort="ascending" aria-label="Profile: activate to sort column descending">Profile</th>
                                            <th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" style="width: 244.4px;" aria-label="Name: activate to sort column ascending">Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" style="width: 448.283px;" aria-label="Email: activate to sort column ascending">Email</th>
                                            <th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" style="width: 202.15px;" aria-label="Product: activate to sort column ascending">Product</th>
                                            <th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" style="width: 224.717px;" aria-label="Total Sell: activate to sort column ascending">Total Sell</th>
                                            <th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" style="width: 177.567px;" aria-label="Status: activate to sort column ascending">Status</th>
                                            <th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" style="width: 200.517px;" aria-label="Join On: activate to sort column ascending">Join On</th>
                                            <th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" style="width: 219.767px;" aria-label="Action: activate to sort column ascending">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($seller as $seller)
                                        <tr class="odd">
                                            <td class="sorting_1"><img class="vendor-thumb" src="assets/img/vendor/u1.jpg" alt="vendor image"></td>
                                            <td>{{ $seller->name }}</td>
                                            <td>{{ $seller->email }}</td>
                                            <td>28</td>
                                            <td>2161</td>
                                            <td>ACTIVE</td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-outline-success">Info</button>
                                                    <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="row justify-content-between bottom-information">
                                    <div class="dataTables_info" id="responsive-data-table_info" role="status" aria-live="polite">Showing 1 to 20 of 88 entries</div>
                                    <div class="dataTables_paginate paging_simple_numbers" id="responsive-data-table_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled" id="responsive-data-table_previous">
                                                <a href="#" aria-controls="responsive-data-table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                            </li>
                                            <li class="paginate_button page-item active">
                                                <a href="#" aria-controls="responsive-data-table" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                            </li>
                                            <li class="paginate_button page-item ">
                                                <a href="#" aria-controls="responsive-data-table" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                            </li>
                                            <li class="paginate_button page-item ">
                                                <a href="#" aria-controls="responsive-data-table" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                                            </li>
                                            <li class="paginate_button page-item ">
                                                <a href="#" aria-controls="responsive-data-table" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                                            </li>
                                            <li class="paginate_button page-item ">
                                                <a href="#" aria-controls="responsive-data-table" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                                            </li>
                                            <li class="paginate_button page-item next" id="responsive-data-table_next">
                                                <a href="#" aria-controls="responsive-data-table" data-dt-idx="6" tabindex="0" class="page-link">Next</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Vendor Modal  -->
        <div class="modal fade modal-add-contact" id="addVendor" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">

                
                <form method="POST" action="/load-vendor-list">
									@csrf
									@method('POST')

                        <div class="modal-header px-4">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Add New Vendor</h5>
                        </div>

                        <div class="modal-body px-4">
                            <div class="form-group row mb-6">
                                <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">Vendor Image</label>
                                <div class="col-sm-8 col-lg-10">
                                    <div class="custom-file mb-1">
                                        <input type="file" class="custom-file-input" id="coverImage" >
                                        <label class="custom-file-label" for="coverImage">Choose file...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div>
                            </div>


                            <div class="row mb-2">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="firstName">First name</label>
                                        <input type="text" class="form-control" id="firstName" value="John">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="lastName">Last name</label>
                                        <input type="text" class="form-control" id="lastName" value="Deo">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="userName">User name</label>
                                        <input type="text" class="form-control" id="userName" value="johndoe">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" value="johnexample@gmail.com">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="Birthday">Birthday</label>
                                        <input type="text" class="form-control" id="Birthday" value="10-12-1991">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="event">Address</label>
                                        <input type="text" class="form-control" id="event" value="Address here">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer px-4">
                            <button type="button" class="btn btn-secondary btn-pill" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-pill">Save Contact</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- End Content -->
</div>

@endsection
