@extends('admin.master')

@section('title')
    Product Add
@endsection

@section('content')

    <div class="app-content main-content mt-0">
        <div class="side-app">

            <div class="main-container container-fluid">

                <div class="page-header">

                    <div>
                        <h1 class="page-title">Product</h1>
                    </div>

                    <div class="ms-auto pageheader-btn">

                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Product</a></li>
                            <li class="breadcrumb-item active">Add</li>
                        </ol>

                    </div>

                </div>


                <div class="card">

                    <div class="card-header border-bottom">

                        <h3 class="card-title">Product Add</h3>

                    </div>


                    <div class="card-body">

                        <form action="{{ route('admin.products.store') }}"
                              method="POST"
                              enctype="multipart/form-data">

                        @csrf


                        <!-- Category -->
                            <div class="form-group">

                                <label class="form-label">Category</label>

                                <select name="category_id"
                                        class="form-control select2 form-select">

                                    <option value="">Select Category</option>

                                    @foreach($categories as $category)

                                        <option value="{{ $category->id }}">

                                            {{ $category->name }}

                                        </option>

                                    @endforeach

                                </select>

                            </div>


                            <!-- Subcategory -->
                            <div class="form-group">

                                <label class="form-label">Sub Category</label>

                                <select name="subcategory_id"
                                        class="form-control select2 form-select">

                                    <option value="">Select Subcategory</option>

                                    @foreach($subcategories as $sub)

                                        <option value="{{ $sub->id }}">

                                            {{ $sub->name }}

                                        </option>

                                    @endforeach

                                </select>

                            </div>


                            <!-- Brand -->
                            <div class="form-group">

                                <label class="form-label">Brand</label>

                                <select name="brand_id"
                                        class="form-control select2 form-select">

                                    <option value="">Select Brand</option>

                                    @foreach($brands as $brand)

                                        <option value="{{ $brand->id }}">

                                            {{ $brand->name }}

                                        </option>

                                    @endforeach

                                </select>

                            </div>


                            <!-- Unit -->
                            <div class="form-group">

                                <label class="form-label">Unit</label>

                                <select name="unit_id"
                                        class="form-control select2 form-select">

                                    <option value="">Select Unit</option>

                                    @foreach($units as $unit)

                                        <option value="{{ $unit->id }}">

                                            {{ $unit->name }}

                                        </option>

                                    @endforeach

                                </select>

                            </div>


                            <!-- Product Name -->
                            <div class="mb-3">

                                <label class="form-label">Product Name</label>

                                <input
                                    type="text"
                                    name="name"
                                    class="form-control"
                                    required>

                            </div>


                            <!-- Product Code -->
                            <div class="mb-3">

                                <label class="form-label">Product Code</label>

                                <input
                                    type="text"
                                    name="code"
                                    class="form-control">

                            </div>


                            <!-- Stock -->
                            <div class="mb-3">

                                <label class="form-label">Stock Amount</label>

                                <input
                                    type="number"
                                    name="stock"
                                    class="form-control">

                            </div>


                            <!-- Price -->
                            <div class="mb-3">

                                <label class="form-label">Price</label>

                                <input
                                    type="number"
                                    name="price"
                                    class="form-control">

                            </div>


                            <!-- Short Description -->
                            <div class="mb-3">

                                <label class="form-label">Short Description</label>

                                <textarea
                                    name="short_description"
                                    class="form-control"></textarea>

                            </div>


                            <!-- Long Description -->
                            <div class="mb-3">

                                <label class="form-label">Long Description</label>

                                <textarea
                                    name="description"
                                    id="summernote"></textarea>

                            </div>


                            <!-- Thumbnail -->
                            <div class="mb-3 col-md-4">

                                <label class="form-label">Product Thumbnail</label>

                                <input
                                    type="file"
                                    name="thumbnail"
                                    class="dropify">

                            </div>


                            <!-- Multiple Images -->
                            <div class="mb-3">

                                <label class="form-label">Product Gallery</label>

                                <input
                                    type="file"
                                    name="images[]"
                                    multiple>

                            </div>


                            <!-- Feature -->
                            <div class="form-group">

                                <label class="form-label">Feature Status</label>

                                <select name="feature_status"
                                        class="form-control select2 form-select">

                                    <option value="1">Featured</option>
                                    <option value="0">Non Featured</option>

                                </select>

                            </div>


                            <!-- Status -->
                            <div class="form-group">

                                <label class="form-label">Status</label>

                                <select name="status"
                                        class="form-control select2 form-select">

                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>

                                </select>

                            </div>


                            <div class="text-end">

                                <button class="btn btn-primary">

                                    Save Product

                                </button>

                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
