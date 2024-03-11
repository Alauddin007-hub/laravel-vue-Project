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
					<h5 class="mb-0">Category Correction</h5>
					@if($errors->any())
					<div class="alert alert-danger">
						@foreach($errors->all() as $err)
						<li>{{$err}}</li>
						@endforeach
					</div>
					@endif
				</div>
				<div class="card-body p-4">
					<form id="jQueryValidationForm" method="post" action="{{route('category.update', $cats->id)}}">
						@csrf
						<div class="row mb-3">
							<label for="input35" class="col-sm-3 col-form-label">Category Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" value="{{$cats->name ? $cats->name : old('name') }}" id="input35" name="name" placeholder="Enter Category Name">
							</div>
						</div>

						<div class="row">
							<label class="col-sm-3 col-form-label"></label>
							<div class="col-sm-9">
								<div class="d-md-flex d-grid align-items-center gap-3">
									<button type="submit" class="btn btn-primary px-4" name="submit2">Update</button>
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