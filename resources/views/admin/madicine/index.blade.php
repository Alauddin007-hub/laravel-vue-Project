@extends('admin.layouts.app')

@section('title','Category List')

@section('content')

<!--start main content-->
<main class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">Admin</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Medicines</li>
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

	<h6 class="mb-0 text-uppercase">Medicines</h6><br>
	<div>
		<a href="{{route('medicine.post')}}" class="btn btn-success fa fa-plus"> Add Medicine</a>
	</div>
	<hr>
	<div class="card">
		<div class="card-body">
			<div class="table-responsive">
				@if(session('success'))
				<div class="alert alert-primary">
					{{ session('success') }}
				</div>
				@endif
				<table id="example2" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>#SL</th>
							<th>Name</th>
							<th>Category</th>
							<th>Brand</th>
							<th>Purchase Price</th>
							<th>Discount</th>
							<th>Selling Price</th>
							<th>Stock</th>
							<th>Action</th>
						</tr>
					</thead>
					<!-- name 	category_id 	brand 	purchase_price 	discount 	selling_price  photo	stock -->
					<tbody>
						@foreach($medicines as $key=>$item)
						<tr>
							<td>{{++$key}}</td>
							<td>
								<div class="table-avatar">
									<a href="javascript:void(0)" class="avatar"><img alt="avatar" src="{{asset('storage/medicine/'.$item->photo)}}" width="40px" height="50px"></a>
									<a href="javascript:void(0)">{{$item->name}}</a>
								</div>
							</td>
							<td>{{$item->category->name}}</td>
							<td>{{$item->brand}}</td>
							<td>{{$item->purchase_price}}</td>
							<td>{{$item->discount}}</td>
							<td>{{$item->selling_price}}</td>
							<td>{{$item->stock}}</td>
							<td>
								<a class="btn btn-info" href="{{route('medicine.show',$item->id)}}"><i class="bi bi-eye-fill"></i></a>
								<a class="btn btn-secondary" href="{{route('medicine.edit',$item->id)}}"><i class="bi bi-pencil-square"></i></a>
								<a class="btn btn-danger" href="{{route('medicine.delete',$item->id)}}"><i class="bi bi-trash-fill"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
					<tfoot>
					<th>#SL</th>
							<th>Name</th>
							<th>Category</th>
							<th>Brand</th>
							<th>Purchase Price</th>
							<th>Discount</th>
							<th>Selling Price</th>
							<th>Stock</th>
							<th>Action</th>
					</tfoot>
				</table>
			</div>
		</div>
	</div>

</main>
<!--end main content-->

@endsection