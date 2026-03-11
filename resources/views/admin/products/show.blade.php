@extends('admin.master')

@section('title')
    Product Details
@endsection


@section('content')

    <div class="app-content main-content mt-0">
        <div class="side-app">

            <div class="main-container container-fluid">

                <!-- Page Header -->

                <div class="page-header">
                    <div>
                        <h1 class="page-title">Product Details</h1>
                    </div>

                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item">Product</li>
                            <li class="breadcrumb-item active">Details</li>
                        </ol>
                    </div>
                </div>



                <div class="row">

                    <!-- LEFT SIDE IMAGES -->

                    <!-- LEFT SIDE IMAGES -->

                    <div class="col-md-5">

                        <div class="card">
                            <div class="card-body text-center">

                                <h5 class="mb-3">Product Thumbnail</h5>

                                @if($product->thumbnail)

                                    <a href="{{ asset('storage/'.$product->thumbnail) }}" data-lightbox="product">

                                        <img
                                            src="{{ asset('storage/'.$product->thumbnail) }}"
                                            style="width:100%;max-height:320px;object-fit:cover"
                                            class="border  mb-4 p-2">

                                    </a>

                                @endif


                                <h5 class="mb-3">Product Gallery</h5>

                                <div class="row">

                                    @foreach($product->images as $image)

                                        <div class="col-4 mb-3">

                                            <a href="{{ asset('storage/'.$image->image) }}" data-lightbox="product">

                                                <img
                                                    src="{{ asset('storage/'.$image->image) }}"
                                                    style="width:100%;height:110px;object-fit:cover"
                                                    class="border p-2">

                                            </a>

                                        </div>

                                    @endforeach

                                </div>

                            </div>
                        </div>

                    </div>



                    <!-- RIGHT SIDE PRODUCT INFO -->

                    <div class="col-md-7">

                        <div class="card">

                            <div class="card-header">
                                <h3 class="card-title">{{ $product->name }}</h3>
                            </div>

                            <div class="card-body">

                                <table class="table table-bordered table-striped">

                                    <tr>
                                        <th width="200">Product Code</th>
                                        <td>{{ $product->code }}</td>
                                    </tr>

                                    <tr>
                                        <th>Category</th>
                                        <td>{{ $product->category->name ?? '-' }}</td>
                                    </tr>

                                    <tr>
                                        <th>Subcategory</th>
                                        <td>{{ $product->subcategory->name ?? '-' }}</td>
                                    </tr>

                                    <tr>
                                        <th>Brand</th>
                                        <td>{{ $product->brand->name ?? '-' }}</td>
                                    </tr>

                                    <tr>
                                        <th>Unit</th>
                                        <td>{{ $product->unit->name ?? '-' }}</td>
                                    </tr>

                                    <tr>
                                        <th>Stock</th>
                                        <td>{{ $product->stock }}</td>
                                    </tr>

                                    <tr>
                                        <th>Price</th>
                                        <td>
                                            <strong class="text-success">
                                                ৳ {{ number_format($product->price,2) }}
                                            </strong>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Feature</th>
                                        <td>
<span class="badge bg-{{ $product->feature_status ? 'success':'secondary' }}">
{{ $product->feature_status ? 'Featured':'Normal' }}
</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Status</th>
                                        <td>
<span class="badge bg-{{ $product->status ? 'success':'danger' }}">
{{ $product->status ? 'Active':'Inactive' }}
</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Short Description</th>
                                        <td>{{ $product->short_description }}</td>
                                    </tr>

                                </table>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- FULL DESCRIPTION -->

                <div class="row mt-4">

                    <div class="col-lg-12">

                        <div class="card">

                            <div class="card-header">
                                <h3 class="card-title">Product Description</h3>
                            </div>

                            <div class="card-body">

                                <div class="border p-3">

                                    {!! $product->description !!}

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


            </div>
        </div>
    </div>

@endsection
