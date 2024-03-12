@extends('admin.layouts.app')

@section('title','PMS-POS Dashboard')

@section('content')

<!--start main content-->
<main class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">Forms</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Validations</li>
				</ol>
			</nav>
		</div>
		<div class="ms-auto">
			<div class="btn-group">
				<button type="button" class="btn btn-primary">Settings</button>
				<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
				</button>
				<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item" href="javascript:;">Action</a>
					<a class="dropdown-item" href="javascript:;">Another action</a>
					<a class="dropdown-item" href="javascript:;">Something else here</a>
					<div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
				</div>
			</div>
		</div>
	</div>
	<!--end breadcrumb-->

	<div class="row">
		<div class="col-lg-8 mx-auto">
			<div class="card">
				<div class="card-header px-4 py-3 bg-transparent">
					<h5 class="mb-0">Add Category</h5>
					@if($errors->any())
					<div class="alert alert-danger">
						@foreach($errors->all() as $err)
						<li>{{$err}}</li>
						@endforeach
					</div>
					@endif
				</div>
				<div class="card-body p-4">
					<form id="jQueryValidationForm" method="post" action="{{route('medicine.store')}}" enctype="multipart/form-data">
						@csrf
						<div class="row mb-3">
							<label for="input35" class="col-sm-3 col-form-label">Medicine Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="input35" name="name" placeholder="Enter Medicine Name">
							</div>
						</div>
						<div class="row mb-3">
							<label for="input39" class="col-sm-3 col-form-label">Category</label>
							<div class="col-sm-9">
								<select class="form-select" id="input39" name="category">
									<option selected disabled value>Choose...</option>
									@foreach($cat as $item)
									<option value="{{$item->id}}">{{$item->name}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="row mb-3">
							<label for="input35" class="col-sm-3 col-form-label">Brand Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="input40" name="brand" placeholder="Enter brand Name">
							</div>
						</div>
						<div class="row mb-3">
							<label for="input36" class="col-sm-3 col-form-label">Purchase Price</label>
							<div class="col-sm-9">
								<input type="number" class="form-control" id="input36" name="purchase_price" placeholder="Enter the amount">
							</div>
						</div>
						<div class="row mb-3">
							<label for="input37" class="col-sm-3 col-form-label">Discount</label>
							<div class="col-sm-9">
								<input type="number" class="form-control" id="input37" name="discount" placeholder="Enter The Discount">
							</div>
						</div>
						<div class="row mb-3">
							<label for="input37" class="col-sm-3 col-form-label">Photo</label>
							<div class="col-sm-9">
								<input type="file" class="form-control" id="input38" name="photo">
							</div>
						</div>
						<div class="row mb-3">
							<label for="input37a" class="col-sm-3 col-form-label">Selling Price</label>
							<div class="col-sm-9">
								<input type="number" class="form-control" id="input37a" name="selling_price" placeholder="Enter the amount">
							</div>
						</div>
						<div class="row mb-3">
							<label for="input37" class="col-sm-3 col-form-label">Stock</label>
							<div class="col-sm-9">
								<input type="number" class="form-control" id="input34" name="stock" placeholder="Enter The Quantity">
							</div>
						</div>
						<div class="row">
							<label class="col-sm-3 col-form-label"></label>
							<div class="col-sm-9">
								<div class="d-md-flex d-grid align-items-center gap-3">
									<button type="submit" class="btn btn-primary px-4" name="submit2">Add</button>
									<button type="reset" class="btn btn-light px-4">Reset</button>
								</div>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
	<!--end row-->


</main>
<!--end main content-->

@endsection