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


                <style>
                    .switch { position: relative; display: inline-block; width: 46px; height: 24px; }
                    .switch input { opacity: 0; width: 0; height: 0; }
                    .slider { position: absolute; cursor: pointer; inset: 0; background-color: #ccc; transition: .4s; border-radius: 24px; }
                    .slider:before { position: absolute; content: ""; height: 18px; width: 18px; left: 3px; bottom: 3px; background-color: white; transition: .4s; border-radius: 50%; }
                    input:checked + .slider { background-color: #28a745; }
                    input:checked + .slider:before { transform: translateX(22px); }
                </style>


                <div class="row row-sm">

                    <div class="col-lg-12">

                        <div class="card">

                            <div class="card-header border-bottom d-flex justify-content-between">

                                <h3 class="card-title">Product List</h3>

                                <a href="{{ route('admin.products.create') }}" class="btn btn-primary btn-sm">
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
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th width="220">Action</th>
                                        </tr>

                                        </thead>


                                        <tbody>

                                        @forelse($products as $product)

                                            <tr>

                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->code }}</td>
                                                <td>{{ $product->price }}</td>

                                                <td>

                                                    <label class="switch">

                                                        <input type="checkbox"
                                                               {{ $product->status ? 'checked' : '' }}
                                                               onchange="toggleProductStatus({{ $product->id }}, this)">

                                                        <span class="slider"></span>

                                                    </label>

                                                </td>


                                                <td>

                                                    <a href="{{ route('admin.products.show',$product->id) }}" class="btn btn-info btn-sm">
                                                        Details
                                                    </a>

                                                    <a href="{{ route('admin.products.edit',$product->id) }}" class="btn btn-warning btn-sm">
                                                        Edit
                                                    </a>

                                                    <form action="{{ route('admin.products.destroy',$product->id) }}" method="POST" class="d-inline">

                                                        @csrf
                                                        @method('DELETE')

                                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                                            Delete
                                                        </button>

                                                    </form>

                                                </td>

                                            </tr>

                                        @empty

                                            <tr>
                                                <td colspan="6" class="text-center">
                                                    No Product Found
                                                </td>
                                            </tr>

                                        @endforelse

                                        </tbody>

                                    </table>


                                    {{ $products->links() }}

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection



@section('scripts')

    <script>

        function toggleProductStatus(id, checkbox)
        {

            axios.post("{{ url('admin/products') }}/" + id + "/toggle-status")

                .then(function(response){

                    console.log("Status updated");

                })

                .catch(function(){

                    checkbox.checked = !checkbox.checked;

                    alert("Status update failed");

                });

        }

    </script>

@endsection
