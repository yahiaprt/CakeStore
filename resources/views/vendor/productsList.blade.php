@extends('layouts.admin')

@section('content')

<div class="ec-content-wrapper">
				<div class="content">
					<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
						<div>
							<h1>Product</h1>
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
										<div id="responsive-data-table_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
										<div class="dataTables_length" id="responsive-data-table_length"><label>  <select name="responsive-data-table_length" aria-controls="responsive-data-table" class="form-select form-select-sm">   entries</label></div><div id="responsive-data-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="responsive-data-table"></label></div></div>

																					                                            @foreach($products as $products)

											<div class="row justify-content-between top-information">
											<div class="dataTables_length" id="responsive-data-table_length">

										
										<table id="responsive-data-table" class="table dataTable no-footer" style="width: 100%;" aria-describedby="responsive-data-table_info">
											<thead>
												<tr><th class="sorting sorting_asc" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" style="width: 129px;" aria-sort="ascending" aria-label="Product: activate to sort column descending">Product</th><th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" style="width: 255px;" aria-label="Name: activate to sort column ascending">Name</th><th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" style="width: 97px;" aria-label="Price: activate to sort column ascending">Price</th><th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" style="width: 97px;" aria-label="Offer: activate to sort column ascending">Offer</th><th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" style="width: 162px;" aria-label="Purchased: activate to sort column ascending">Purchased</th><th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" style="width: 103px;" aria-label="Stock: activate to sort column ascending">Stock</th><th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" style="width: 112px;" aria-label="Status: activate to sort column ascending">Status</th><th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" style="width: 128px;" aria-label="Date: activate to sort column ascending">Date</th><th class="sorting" tabindex="0" aria-controls="responsive-data-table" rowspan="1" colspan="1" style="width: 141px;" aria-label="Action: activate to sort column ascending">Action</th></tr>
											</thead>

											<tbody>
												
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
															<a class="dropdown-item" 
        data-bs-toggle="modal" class="ec-btn-group wishlist" title="Wishlist"
        data-bs-target="#productDetailModal{{ $products->id }}"
        class="btn btn-outline-success details-btn"
    >
   Edit
    </a>											
	<a class="dropdown-item" 
        data-bs-toggle="modal" class="ec-btn-group wishlist" title="Wishlist"
        data-bs-target="#productOrdersModal{{ $products->id }}"
        class="btn btn-outline-success details-btn"
    >
   Orders
    </a>						
	<a class="dropdown-item" href="{{ route('deleteProduct', ['id' => $products->id]) }}">Delete</a>
															</div>
														</div>
													</td>
												</tr>


												<div class="modal fade modal-add-contact" id="productDetailModal{{ $products->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background-color: rgba(245, 240, 225, 0); max-width: 3000px; width: 3000%; hight: 500%; max-hight:1000px  position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);" >  
           <div class="modal-dialog modal-dialog-centered" role="document" style="background-color: rgba(245, 240, 225, 0); max-width: 2000px; width: 2000%; height: 500%; max-height:1300px"style="background-color: black">

        <div class="modal-content" style="background-color: rgba(245, 240, 225, 0); max-width: 2000px; width: 2000%;  height: 500%; max-height:1300px" style="background-color: #f5f0e1;">



            <div class="ec-content-wrapper" style="background-color: rgba(245, 240, 225, 0); max-width: 1950px; width: 2000%;  height: 500%; max-height:1300px"style="background-color: #f5f0e1;">

   
 
                <div class="content" >






				<div class="ec-content-wrapper">
	
	<form method="POST" action="/update-Product"  enctype="multipart/form-data" >
	
		@csrf
	
					<div class="content">
						<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
							<div>
 				 
							</div>
							<div>
 							 
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div class="card card-default">
									<div class="card-header card-header-border-bottom">
										<h2>Update Product</h2>
									</div>
									<script>
    // Get references to the file input and image element
    var imageUpload = document.getElementById('imageUpload');
    var previewImage = document.getElementById('previewImage');

    // Add an event listener to the file input
    imageUpload.addEventListener('change', function () {
        // Check if a file is selected
        if (imageUpload.files.length > 0) {
            // Update the image source with the selected file
            var reader = new FileReader();
            reader.onload = function (e) {
                previewImage.src = e.target.result;
            };
            reader.readAsDataURL(imageUpload.files[0]);
        } else {
            // No file selected, revert to the default image
            previewImage.src = "{{ asset('images/products/' . json_decode($products->image_data)[0]) }}";
        }
    });
</script>

									<div class="card-body">
										<div class="row ec-vendor-uploads">
										<div class="col-lg-4">
											<div class="ec-vendor-img-upload">
												<div class="ec-vendor-main-img">
													<div class="avatar-upload">

														<div class="avatar-edit">
															<input type="file" id="imageUpload" class="ec-image-upload" name="images[]"  accept=".png, .jpg, .jpeg">
															<label for="imageUpload"><img src="assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit"></label>
														</div>
														<div class="avatar-preview ec-preview">
															<div class="imagePreview ec-div-preview">
																<img class="ec-image-preview" src="assets/img/products/vender-upload-preview.jpg" alt="edit">
															</div>
														</div>
													</div>
													<div class="thumb-upload-set colo-md-12">
														<div class="thumb-upload">
															<div class="thumb-edit">
																<input type="file" id="thumbUpload01" name="images[]" class="ec-image-upload" accept=".png, .jpg, .jpeg">
																<label for="imageUpload"><img src="assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit"></label>
															</div>
															<div class="thumb-preview ec-preview">
																<div class="image-thumb-preview">
																	<img class="image-thumb-preview ec-image-preview" src="assets/img/products/vender-upload-thumb-preview.jpg" alt="edit">
																</div>
															</div>
														</div>
											 
														<div class="thumb-upload">
															<div class="thumb-edit">
																<input type="file" id="thumbUpload05" name="images[]" class="ec-image-upload" accept=".png, .jpg, .jpeg">
																<label for="imageUpload"><img src="assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit"></label>
															</div>
															<div class="thumb-preview ec-preview">
																<div class="image-thumb-preview">
																	<img class="image-thumb-preview ec-image-preview" src="assets/img/products/vender-upload-thumb-preview.jpg" alt="edit">
																</div>
															</div>
														</div>

                                                        <div class="thumb-upload">
															<div class="thumb-edit">
																<input type="file" id="thumbUpload05" name="images[]" class="ec-image-upload" accept=".png, .jpg, .jpeg">
																<label for="imageUpload"><img src="assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit"></label>
															</div>
															<div class="thumb-preview ec-preview">
																<div class="image-thumb-preview">
																	<img class="image-thumb-preview ec-image-preview" src="assets/img/products/vender-upload-thumb-preview.jpg" alt="edit">
																</div>
															</div>
														</div>

                                                        <div class="thumb-upload">
															<div class="thumb-edit">
																<input type="file" id="thumbUpload05" name="images[]" class="ec-image-upload" accept=".png, .jpg, .jpeg">
																<label for="imageUpload"><img src="assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit"></label>
															</div>
															<div class="thumb-preview ec-preview">
																<div class="image-thumb-preview">
																	<img class="image-thumb-preview ec-image-preview" src="assets/img/products/vender-upload-thumb-preview.jpg" alt="edit">
																</div>
															</div>
														</div>

											 

													</div>
												</div>
											</div>
										</div>
											<div class="col-lg-8">
												<div class="ec-vendor-upload-detail">
	
		<div class="col-md-6">
			<label for="product_name" class="form-label"></label>
			<input type="text" class="form-control slug-title" id="product_name" value="{{$products->product_name}}" name="product_name">
		</div>
	
		<input type="hidden" name="product_id" value="{{$products->id}}">
 		<div class="col-md-6">
			<label class="form-label">Select Categories</label>
			<select name="categories" id="category" class="form-select">
				<optgroup label="Fashion">
					<option value="t-shirt">sucré</option>
					<option value="dress">cake</option>
				</optgroup>
				<optgroup label="Furniture">
					<option value="table">sallee</option>
					<option value="sofa">mini pizza</option>
				</optgroup>
			   
			</select>
		</div>
	
		<div class="col-md-12">
			<label for="slug" class="col-12 col-form-label">Slug</label>
			<div class="col-12">
				<input id="slug" name="slug" class="form-control here set-slug" type="text" value="{{$products->slug}}">
			</div>
		</div>
	
		<div id="size-options" class="col-md-8 mb-25">
			<br>
			<label class="form-label">Type</label>
			<div class="form-checkbox-box">
				<div class="form-check form-check-inline">
			@if(!empty($products->colors) && is_array(json_decode($products->colors)))
    @if(json_decode($products->colors)[0] == 'S')
        <input type="checkbox" name="colors[]" value="S" checked>
    @else

					<input type="checkbox" name="colors[]" value="S">
					@endif 			
					@else
					<input type="checkbox" name="colors[]" value="S">
					@endif

					<label>sucré</label>
				</div>
				<div class="form-check form-check-inline">
			@if(!empty($products->colors) && is_array(json_decode($products->colors)))
    @if(json_decode($products->colors)[0] == 'M')
        <input type="checkbox" name="colors[]" value="M" checked>
    @else

					<input type="checkbox" name="colors[]" value="M">
					@endif 			
					@else
					<input type="checkbox" name="colors[]" value="M">
					@endif

					<label>salé</label>
				</div>
			 
		   
			</div>
		</div>
	
		<div id="size-options" class="col-md-8 mb-25">
			<label class="form-label">Unity</label>
			<div class="form-checkbox-box">
				<div class="form-check form-check-inline">

				@if(!empty($products->size) && is_array(json_decode($products->size)))
	@if(json_decode($products->size)[0] == 'Kg')
		<input type="checkbox" name="size[]" value="Kg" checked>
	@else
					<input type="checkbox" name="size[]" value="Kg">
					@endif 		
					@else
					<input type="checkbox" name="size[]" value="Kg">
					@endif
					<label>Kg</label>
				</div>
				<div class="form-check form-check-inline">
				@if(!empty($products->size) && is_array(json_decode($products->size)))
	@if(json_decode($products->size)[0] == 'piece/S')

		<input type="checkbox" name="size[]" value="piece/S" checked>
	@else
					<input type="checkbox" name="size[]" value="piece/S">
					@endif 			
					@else
					<input type="checkbox" name="size[]" value="piece/S">
					@endif
					<label>piece/S</label>
				</div>
				<div class="form-check form-check-inline">
				@if(!empty($products->size) && is_array(json_decode($products->size)))
	@if(json_decode($products->size)[0] == 'piece/M')

					<input type="checkbox" name="size[]" value="piece/M">
					@else
					<input type="checkbox" name="size[]" value="piece/M">
					@endif 			
							@endif
					<label>piece/M</label>
				</div>
				<div class="form-check form-check-inline">
				@if(!empty($products->size) && is_array(json_decode($products->size)))
	@if(json_decode($products->size)[0] == 'piece/L')

					<input type="checkbox" name="size[]" value="piece/L">
					@else
					<input type="checkbox" name="size[]" value="piece/L">
					@endif 			
					@else
					<input type="checkbox" name="size[]" value="piece/L">
					
					@endif
					<label>piece/L</label>
				</div>
			 
			</div>
		</div>
	
		<div class="col-md-6">
			<label class="form-label">Price <span>( In DZD )</span></label>
			<input type="number" class="form-control" id="price" name="price" value="{{ $products->price }}"/>  
		</div>
	
		<div class="col-md-6">
			<label class="form-label">Minimal Qauntity</label>
			<input type="number" class="form-control" id="stock" name="stock"value="{{$products->stock}}">  </input>
		</div>
	
		<div class="col-md-12">
			<label class="form-label">Full Detail</label>
			<textarea name="full_detail" class="form-control" rows="4"> {{$products->full_detail}} </textarea>
		</div>
	
	 <br>
		<div class="col-md-12">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	
	
	
	
	
	
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- End Content -->
					</form>
				</div>


























</div>
</div>

</div>

</div>

</div>








                                            
                                            
                                            </tbody>
										</table>
 									</div>    
									
 


	<div class="modal fade modal-add-contact" id="productOrdersModal{{ $products->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background-color: rgba(245, 240, 225, 0); max-width: 3000px; width: 3000%; hight: 500%; max-hight:1000px  position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);" >  
			  <div class="modal-dialog modal-dialog-centered" role="document" style="background-color: rgba(245, 240, 225, 0); max-width: 2000px; width: 2000%; height: 500%; max-height:1300px"style="background-color: black">
   
		   <div class="modal-content" style="background-color: rgba(245, 240, 225, 0); max-width: 2000px; width: 2000%;  height: 500%; max-height:1300px" style="background-color: #f5f0e1;">
   
   
   
   
   <div class="ec-content-wrapper">
	   
				   <div class="content">
					   <div class="breadcrumb-wrapper breadcrumb-wrapper-2">
 						   
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
															   @if($orders && isset($orders->items))
																   @foreach(json_decode($orders->items) as $item)
																	   @if($item->title == $products->product_name)
   
   
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
	
   
   <a data-bs-toggle="modal" data-bs-target="#orderDetails{{ $orders->id }}"   class="btn btn-outline-success">Details</a>		
										
   
															   <div class="dropdown-menu">
																   
															   
															   
															   <a class="dropdown-item" href="#">Track</a>
																   <a class="dropdown-item" href="#">Cancel</a>
																   
															   </div>
														   </div>
													   </td>
												   </tr>
											   
	   
														   </tbody>
   
   
														   
   
														   @endif
																   @endforeach
															   @endif
   
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
   
   
   
	  
   </div>
   </div>
   
   </div>
   </div>
   
    
   
   
									@endforeach

								</div>
							</div>
						</div>
					</div>
				</div> <!-- End Content -->
			</div>

















@endsection