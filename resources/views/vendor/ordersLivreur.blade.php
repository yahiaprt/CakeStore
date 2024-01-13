@extends('layouts.adminLivreur')
 @section('contentLivreur')
<div class="ec-content-wrapper">
	
				<div class="content">
					<div class="breadcrumb-wrapper breadcrumb-wrapper-2">
						<h1>New Orders</h1>
						<p class="breadcrumbs"><span><a href="index-2.html">Home</a></span>
							<span><i class="mdi mdi-chevron-right"></i></span>Orders
						</p>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-body">
									<div class="table-responsive">
										<div id="responsive-data-table_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row justify-content-between top-information"><div class="dataTables_length" id="responsive-data-table_length"><label>Show <select name="responsive-data-table_length" aria-controls="responsive-data-table" class="form-select form-select-sm"><option value="20">20</option><option value="30">30</option><option value="50">50</option><option value="75">75</option><option value="-1">All</option></select> entries</label></div><div id="responsive-data-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="responsive-data-table"></label></div></div><table id="responsive-data-table" class="table dataTable no-footer" style="width: 100%;" aria-describedby="responsive-data-table_info">
											<thead>
												<tr><th class="sorting sorting_asc" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" style="width: 44px;" aria-sort="ascending" aria-label="ID: activate to sort column descending">ID</th>
                                                  <th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" style="width: 272px;" aria-label="Customer: activate to sort column ascending">Customer</th><th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" style="width: 80px;" aria-label="Items: activate to sort column ascending">Total Amount</th>
												<th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" style="width: 112px;" aria-label="Payment: activate to sort column ascending">Payment</th><th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" style="width: 145px;" aria-label="Status: activate to sort column ascending">Status</th><th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" style="width: 102px;" aria-label="Date: activate to sort column ascending">Date</th><th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" style="width: 113px;" aria-label="Action: activate to sort column ascending">Action</th></tr>
											</thead>

										
												
												
												
												
												
												
												
												@foreach($orders as $orders)
												
													<tbody>
														
								 <tr class="even">
							                    	 <td>{{ $orders -> id}} </td>

  													<td><strong>{{ $orders -> customer}}</strong><br>
														 
													</td>
 
													<td>{{ $orders -> total_amount}} DZD</td>
 													<td><span class="mb-2 mr-2 badge badge-success">payment successfully</span></td>
                                                     @if(isset($seller))
    <input type="hidden" name="seller_hidden" value="{{ $seller->id }}">
@endif                                                
													<td>
                                                    @if($orders->status == 'accept')

                                                    <span class="mb-2 mr-2 badge badge-success">Accepted</span>
                                                    @elseif($orders->status == 'refuse')
                                                    <span class="mb-2 mr-2 badge badge-danger">Refused</span>
                                                    @elseif($orders->status == 'delevered')
                                                    <span class="mb-2 mr-2 badge badge-info">Delevered</span>
                                                    @else

                                                                                                     <span class="mb-2 mr-2 badge badge-warning">Redy To Ship</span>

@endif


													</td>
													<td>{{ $orders -> created_at}}</td>
													<td>
														<div class="btn-group mb-1">
														<div class="modal fade modal-add-contact" id="orderDetails{{ $orders->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 90%;">
        <div class="modal-content">
            <div class="ec-content-wrapper">
                <div class="content">
                    <div class="breadcrumb-wrapper breadcrumb-wrapper-2">
                        <h1>Order Detail</h1>
                        <p class="breadcrumbs">
                            <span><a href="index-2.html">Home</a></span>
                            <span><i class="mdi mdi-chevron-right"></i></span>Orders
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="ec-odr-dtl card card-default">
                                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                                    <h2 class="ec-odr">Order Detail<br>
                                        <span class="small">Order ID: #1082</span>
                                    </h2>
                                </div>
                                <div class="card-body">
                                    <!-- Customer Information -->
                                    <div class="row">
                                        <!-- Customer Address -->
                                        <div class="col-xl-3 col-lg-6">
                                            <address class="info-grid">
                                                <div class="info-title"><strong>Customer:</strong></div><br>
                                                <div class="info-content">
                                                    Twitter, Inc.<br>
                                                    795 Folsom Ave, Suite 600<br>
                                                    San Francisco, CA 94107<br>
                                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                                </div>
                                            </address>
                                        </div>
                                        <!-- Shipped To -->
                                        <div class="col-xl-3 col-lg-6">
                                            <address class="info-grid">
                                                <div class="info-title"><strong>Shipped To:</strong></div><br>
                                                <div class="info-content">
                                                    Elaine Hernandez<br>
                                                    P. Sherman 42,<br>
                                                    Wallaby Way, Sidney<br>
                                                    <abbr title="Phone">P:</abbr> (123) 345-6789
                                                </div>
                                            </address>
                                        </div>
                                        <!-- Payment Method -->
                                        <div class="col-xl-3 col-lg-6">
                                            <address class="info-grid">
                                                <div class="info-title"><strong>Payment Method:</strong></div><br>
                                                <div class="info-content">
                                                    Visa ending **** 1234<br>
                                                    h.elaine@gmail.com<br>
                                                </div>
                                            </address>
                                        </div>
                                        <!-- Order Date -->
                                        <div class="col-xl-3 col-lg-6">
                                            <address class="info-grid">
                                                <div class="info-title"><strong>Order Date:</strong></div><br>
                                                <div class="info-content">
                                                    4:34PM,<br>
                                                    Wed, Aug 13, 2020
                                                </div>
                                            </address>
                                        </div>
                                    </div>
                                    <!-- Product Summary Table -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3 class="tbl-title">PRODUCT SUMMARY</h3>
                                            <div class="table-responsive">
                                                <table class="table table-striped o-tbl">
                                                    <thead>
                                                        <tr class="line">
                                                            <td><strong>#</strong></td>
                                                            <td class="text-center"><strong>IMAGE</strong></td>
                                                            <td class="text-center"><strong>PRODUCT</strong></td>
                                                            <td class="text-center"><strong>QUANTITY</strong></td>
                                                            <td class="text-right"><strong>PRICE/UNIT</strong></td>
                                                            <td class="text-right"><strong>SUBTOTAL</strong></td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
													@php
    $totalAmount = 0; // Initialize totalAmount variable
@endphp
                                                        <!-- Loop through products -->
                                                        @foreach($products as $product)
                                                            @if($orders && isset($orders->items))
                                                                @foreach(json_decode($orders->items) as $item)
                                                                    @if($item->title == $product->product_name)
                                                                        <!-- Display product details -->
                                                                        <tr>
                                                                         

                                                                            <td>{{ $product->id }}</td>
                                                                            <td class="text-center"><img class="product-img" src="{{ asset('images/products/' . json_decode($product->image_data)[0]) }}" alt=""></td>
                                                                            <td class="text-center"><strong>{{ $product->product_name }}</strong><br>{{ $product->full_detail }}</td>
                                                                            <td class="text-center">{{ $product->quantity }}</td>
                                                                            <td class="text-right">{{ $product->price }} DZD</td>
                                                                            <td class="text-right">{{ $product->quantity * $product->price }} DZD</td>

                                                                            
                                                                        </tr>
																		@php
            $totalAmount += $product->quantity * $product->price; // Accumulate totalAmount
        @endphp
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                        @endforeach
                                                        <!-- Total, Taxes, and Payment Status rows -->
                                                        <tr>
                                                            <td colspan="4"></td>
                                                            <td class="text-right"><strong>Taxes</strong></td>
                                                            <td class="text-right"><strong>N/A</strong></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4"></td>
                                                            <td class="text-right"><strong>Total</strong></td>
															<td class="text-right"><strong>{{ $totalAmount }} DZD</strong></td> <!-- Replace with dynamic total amount data -->                                                        </tr>
                                                        <tr>
                                                            <td colspan="4"></td>
                                                            <td class="text-right"><strong>Payment Status</strong></td>
                                                            <td class="text-right"><strong>PAID</strong></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tracking Detail -->
                                    <div class="card mt-4 trk-order">
                                        <div class="p-4 text-center text-white text-lg bg-dark rounded-top">
                                            <span class="text-uppercase">Tracking Order No - </span>
                                            <span class="text-medium">34VB5540K83</span>
                                        </div>
                                        <div class="d-flex flex-wrap flex-sm-nowrap justify-content-between py-3 px-2 bg-secondary">
                                            <div class="w-100 text-center py-1 px-2"><span class="text-medium">Shipped Via:</span> UPS Ground</div>
                                            <div class="w-100 text-center py-1 px-2"><span class="text-medium">Status:</span> Checking Quality</div>
                                            <div class="w-100 text-center py-1 px-2"><span class="text-medium">Expected Date:</span> DEC 09, 2021</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between padding-top-2x padding-bottom-1x">
                                                <div class="step completed">
                                                    <div class="step-icon-wrap">
                                                        <div class="step-icon"><i class="mdi mdi-cart"></i></div>
                                                    </div>
                                                    <h4 class="step-title">Confirmed Order</h4>
                                                </div>
                                                <div class="step completed">
                                                    <div class="step-icon-wrap">
                                                        <div class="step-icon"><i class="mdi mdi-tumblr-reblog"></i></div>
                                                    </div>
                                                    <h4 class="step-title">Processing Order</h4>
                                                </div>
                                                <div class="step completed">
                                                    <div class="step-icon-wrap">
                                                        <div class="step-icon"><i class="mdi mdi-gift"></i></div>
                                                    </div>
                                                    <h4 class="step-title">Product Dispatched</h4>
                                                </div>
                                                <div class="step">
                                                    <div class="step-icon-wrap">
                                                        <div class="step-icon"><i class="mdi mdi-truck-delivery"></i></div>
                                                    </div>
                                                    <h4 class="step-title">On Delivery</h4>
                                                </div>
                                                <div class="step">
                                                    <div class="step-icon-wrap">
                                                        <div class="step-icon"><i class="mdi mdi-hail"></i></div>
                                                    </div>
                                                    <h4 class="step-title">Product Delivered</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Content -->
            </div>
        </div>
    </div>
</div>

<div class="btn-group mb-1">
<a data-bs-toggle="modal" data-bs-target="#orderDetails{{ $orders->id }}"   class="btn btn-outline-success">Details</a>		
															<button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu" style="">
																<a class="dropdown-item" href="/acceptShip/{{ $orders->id }}">Accept</a>
																<a class="dropdown-item" href="/refuseShip/{{ $orders->id }}">Refuse</a>
                                                                <a class="dropdown-item" href="/finishShip/{{ $orders->id }}">Delevred</a>

															</div>
														</div>			 

															<div class="dropdown-menu">
																
															
															
															<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
																
															</div>
														</div>
													</td>
												</tr>
											
	
														</tbody>


														
											@endforeach
											
								
										</table>
										<div class="row justify-content-between bottom-information"><div class="dataTables_info" id="responsive-data-table_info" role="status" aria-live="polite">Showing 1 to 10 of 10 entries</div><div class="dataTables_paginate paging_simple_numbers" id="responsive-data-table_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="responsive-data-table_previous"><a href="#" aria-controls="responsive-data-table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="responsive-data-table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="responsive-data-table_next"><a href="#" aria-controls="responsive-data-table" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div><div class="clear"></div></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- End Content -->
			</div>






 @endsection