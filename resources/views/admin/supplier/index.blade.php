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
                    <li class="breadcrumb-item active" aria-current="page">Supplier</li>
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
        <a href="{{route('suppliers.post')}}" class="btn btn-success fa fa-plus"> Add Supplier</a>
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
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($supplier as $key=>$item)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->phone}}</td>
                            <td>{{$item->address}}</td>
                            <td>
                                <a class="btn btn-info" href="{{route('suppliers.show',$item->id)}}"><i class="bi bi-eye-fill"></i></a>
                                <a class="btn btn-secondary" href="{{route('suppliers.edit',$item->id)}}"><i class="bi bi-pencil-square"></i></a>
                                <a class="btn btn-danger" href="{{route('suppliers.delete',$item->id)}}"><i class="bi bi-trash-fill"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <th>#SL</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

</main>
<!--end main content-->

@endsection