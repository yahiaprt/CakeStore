@extends('layouts.admin')

@section('content')
<div class="ec-content-wrapper">
	
<form method="POST" action="/Add-Product"  enctype="multipart/form-data" >

    @csrf

				<div class="content">
					<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
						<div>
							<h1>Add Product</h1>
							<p class="breadcrumbs"><span><a href="index-2.html">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Product</p>
						</div>
						<div>
							<a href="product-list.html" class="btn btn-primary"> View All
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-header card-header-border-bottom">
									<h2>Add Product</h2>
								</div>

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
        <label for="product_name" class="form-label">Product name</label>
        <input type="text" class="form-control slug-title" id="product_name" name="product_name">
    </div>

    <div class="col-md-6">
        <label class="form-label">Select Categories</label>
        <select name="categories" id="category" class="form-select">
            <optgroup label="Fashion">
                <option value="t-shirt">T-shirt</option>
                <option value="dress">Dress</option>
            </optgroup>
            <optgroup label="Furniture">
                <option value="table">Table</option>
                <option value="sofa">Sofa</option>
            </optgroup>
            <optgroup label="Electronic">
                <option value="phone">I Phone</option>
                <option value="laptop">Laptop</option>
            </optgroup>
        </select>
    </div>

    <div class="col-md-12">
        <label for="slug" class="col-12 col-form-label">Slug</label>
        <div class="col-12">
            <input id="slug" name="slug" class="form-control here set-slug" type="text">
        </div>
    </div>

	<div id="size-options" class="col-md-8 mb-25">
        <label class="form-label">Cake Type</label>
        <div class="form-checkbox-box">
            <div class="form-check form-check-inline">
                <input type="checkbox" name="colors[]" value="S">
                <label>sucré</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" name="colors[]" value="M">
                <label>salé</label>
            </div>
       
        </div>
    </div>

    <div id="size-options" class="col-md-8 mb-25">
        <label class="form-label">Unity</label>
        <div class="form-checkbox-box">
            <div class="form-check form-check-inline">
                <input type="checkbox" name="size[]" value="Kg">
                <label>Kg</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" name="size[]" value="piece/S">
                <label>piece/S</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" name="size[]" value="piece/M">
                <label>piece/M</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" name="size[]" value="piece/L">
                <label>piece/L</label>
            </div>
         
        </div>
    </div>

    <div class="col-md-6">
        <label class="form-label">Price <span>( In USD )</span></label>
        <input type="number" class="form-control" id="price" name="price">
    </div>

    <div class="col-md-6">
        <label class="form-label">Minimal Qauntity</label>
        <input type="number" class="form-control" id="stock" name="stock">
    </div>

    <div class="col-md-12">
        <label class="form-label">Full Detail</label>
        <textarea name="full_detail" class="form-control" rows="4"></textarea>
    </div>

    <div class="col-md-12">
        <label class="form-label">Product Tags <span>( Type and make comma to separate tags )</span></label>
        <div class="bootstrap-tagsinput"><input type="text" placeholder=""></div>
        <input type="text" class="form-control" id="group_tag" name="group_tag" value="" placeholder="" data-role="tagsinput" style="display: none;">
    </div>

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

            @endsection