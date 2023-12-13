@extends('layouts.admin')

@section('content')

<div class="ec-content-wrapper">
				<div class="content">
					<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
						<div>
							<h1>Product</h1>
							<p class="breadcrumbs"><span><a href="index-2.html">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Product</p>
						</div>
						<div>
 
							<a href="{{ route('add-product-view') }}" class="btn btn-primary"> Add Porduct</a>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-body">
									<div class="table-responsive">
										<div id="responsive-data-table_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row justify-content-between top-information"><div class="dataTables_length" id="responsive-data-table_length"><label>Show <select name="responsive-data-table_length" aria-controls="responsive-data-table" class="form-select form-select-sm"><option value="20">20</option><option value="30">30</option><option value="50">50</option><option value="75">75</option><option value="-1">All</option></select> entries</label></div><div id="responsive-data-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="responsive-data-table"></label></div></div><table id="responsive-data-table" class="table dataTable no-footer" style="width: 100%;" aria-describedby="responsive-data-table_info">
											<thead>
												<tr><th class="sorting sorting_asc" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" style="width: 129px;" aria-sort="ascending" aria-label="Product: activate to sort column descending">Product</th><th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" style="width: 255px;" aria-label="Name: activate to sort column ascending">Name</th><th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" style="width: 97px;" aria-label="Price: activate to sort column ascending">Price</th><th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" style="width: 97px;" aria-label="Offer: activate to sort column ascending">Offer</th><th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" style="width: 162px;" aria-label="Purchased: activate to sort column ascending">Purchased</th><th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" style="width: 103px;" aria-label="Stock: activate to sort column ascending">Stock</th><th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" style="width: 112px;" aria-label="Status: activate to sort column ascending">Status</th><th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" style="width: 128px;" aria-label="Date: activate to sort column ascending">Date</th><th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" style="width: 141px;" aria-label="Action: activate to sort column ascending">Action</th></tr>
											</thead>

											<tbody>
												
                                            @foreach($products as $products)
                                                <tr class="even">
                                                <td class="sorting_1">
													
												@if(isset(json_decode($products->image_data)[0]))
    <img class="tbl-thumb" src="{{ asset('images/products/' . json_decode($products->image_data)[0]) }}" alt="Product Image">
@endif
											
											</td>										
                                                                                                       
                                                    <td>{{ $products -> product_name }}</td>
													<td>{{ $products -> price }} DZD</td>
													<td>30% OFF</td>
													<td>{{ $products -> purchased_number}}</td>
													<td>{{ $products -> stock}}</td>
													<td>ACTIVE</td>
													<td>{{ $products -> created_at }}</td>
													<td>
														<div class="btn-group mb-1">


														<a   class="btn btn-outline-success" href="{{ route('deleteProduct', ['id' => $products->id]) }}">Delete</a> 


															<button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="{{ route('deleteProduct', ['id' => $products->id]) }}">Delete</a>
															</div>
														</div>
													</td>
												</tr>
                                            @endforeach
                                            
                                            
                                            </tbody>
										</table><div class="row justify-content-between bottom-information"><div class="dataTables_info" id="responsive-data-table_info" role="status" aria-live="polite">Showing 1 to 20 of 57 entries</div><div class="dataTables_paginate paging_simple_numbers" id="responsive-data-table_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="responsive-data-table_previous"><a href="#" aria-controls="responsive-data-table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="responsive-data-table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="responsive-data-table" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="responsive-data-table" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item next" id="responsive-data-table_next"><a href="#" aria-controls="responsive-data-table" data-dt-idx="4" tabindex="0" class="page-link">Next</a></li></ul></div></div><div class="clear"></div></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- End Content -->
			</div>



@endsection