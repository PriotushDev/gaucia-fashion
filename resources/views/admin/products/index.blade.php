@extends('admin.master')

@section('title')
    Product List
@endsection

@section('content')
    <div class="app-content main-content mt-0">
        <div class="side-app">

            <div class="main-container container-fluid">

                <!-- PAGE HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Product</h1>
                    </div>

                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Product</a></li>
                            <li class="breadcrumb-item active">List</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE HEADER END -->

                <div class="row row-sm">
                    <div class="col-lg-12">

                        <div class="card">

                            <div class="card-header border-bottom d-flex justify-content-between">

                                <h3 class="card-title">Product List</h3>

                                <a href="{{ route('admin.products.create') }}"
                                   class="btn btn-primary btn-sm">

                                    Add Product

                                </a>

                            </div>


                            <div class="card-body">

                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif


                                <div class="table-responsive">

                                    <table class="table table-bordered text-nowrap border-bottom">

                                        <thead>

                                        <tr>

                                            <th>SL</th>
                                            <th>Product Name</th>
                                            <th>Code</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>

                                        </tr>

                                        </thead>

                                        <tbody>

                                        @forelse($products as $product)

                                            <tr>

                                                <td>{{ $loop->iteration }}</td>

                                                <td>{{ $product->name }}</td>

                                                <td>{{ $product->code }}</td>

                                                <td>{{ $product->description }}</td>


                                                <td>

                                                    @if($product->images->first())

                                                        <img
                                                            src="{{ asset('storage/'.$product->images->first()->image) }}"
                                                            width="60">

                                                    @endif

                                                </td>


                                                <td>

                                                    <label class="switch">

                                                        <input
                                                            type="checkbox"
                                                            {{ $product->status ? 'checked' : '' }}
                                                            onchange="toggleProductStatus({{ $product->id }},this)">

                                                        <span class="slider round"></span>

                                                    </label>

                                                </td>


                                                <td>

                                                    <a
                                                        href="{{ route('admin.products.edit',$product->id) }}"
                                                        class="btn btn-warning btn-sm">

                                                        Edit

                                                    </a>


                                                    <form
                                                        action="{{ route('admin.products.destroy',$product->id) }}"
                                                        method="POST"
                                                        class="d-inline">

                                                        @csrf
                                                        @method('DELETE')

                                                        <button class="btn btn-danger btn-sm">

                                                            Delete

                                                        </button>

                                                    </form>

                                                </td>

                                            </tr>

                                        @empty

                                            <tr>
                                                <td colspan="7" class="text-center">
                                                    No Data Found
                                                </td>
                                            </tr>

                                        @endforelse

                                        </tbody>

                                    </table>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
