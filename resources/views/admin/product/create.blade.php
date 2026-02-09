@extends('admin.master')

@section('title')
    Product Add
@endsection

@section('content')
    <div class="app-content main-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">


                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Product</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Product</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->


                <!-- PAGE -->
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title"> Product Add</h3>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.product.index') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Category -->
                            <div class="form-group">
                                <label class="form-label">Category Name</label>
                                <select name="category_id" class="form-control select2 form-select" data-placeholder="Choose one" required>
                                    <option label="Choose one"></option>
                                    <option value="1">Chuck Testa</option>
                                </select>
                            </div>
                            <!-- Sub Category -->
                            <div class="form-group">
                                <label class="form-label">Sub Category Name</label>
                                <select name="subcategory_id" class="form-control select2 form-select" data-placeholder="Choose one" required>
                                    <option label="Choose one"></option>
                                    <option value="1">Chuck Testa</option>
                                </select>
                            </div>
                            <!-- Brand -->
                            <div class="form-group">
                                <label class="form-label">Brand Name</label>
                                <select name="brand_id" class="form-control select2 form-select" data-placeholder="Choose one" required>
                                    <option label="Choose one"></option>
                                    <option value="1">Chuck Testa</option>
                                </select>
                            </div>
                            <!-- Unit -->
                            <div class="form-group">
                                <label class="form-label">Unit Name</label>
                                <select name="unit_id" class="form-control select2 form-select" data-placeholder="Choose one" required>
                                    <option label="Choose one"></option>
                                    <option value="1">Chuck Testa</option>
                                </select>
                            </div>

                            <!-- Product Name -->
                            <div class="mb-3">
                                <label class="form-label">Product Name</label>
                                <input
                                    type="text"
                                    name="product_name"
                                    class="form-control"
                                    placeholder="Enter Product name"
                                    required
                                >
                            </div>
                            <!-- Product Code -->
                            <div class="mb-3">
                                <label class="form-label">Product Code</label>
                                <input
                                    type="text"
                                    name="product_code"
                                    class="form-control"
                                    placeholder="Enter Product Code"
                                    required
                                >
                            </div>
                            <!-- Stock -->
                            <div class="mb-3">
                                <label class="form-label">Stock Amount</label>
                                <input
                                    type="number"
                                    name="stock_amount"
                                    class="form-control"
                                    placeholder="Enter Stock Amount"
                                    required
                                >
                            </div>
                            <!-- Price -->
                            <div class="mb-3">
                                <label class="form-label">Product Price</label>
                                <div class="input-group">
                                    <input
                                        type="number"
                                        name="regular_price"
                                        class="form-control"
                                        placeholder=" Regular Price"
                                        required
                                    >
                                    <input
                                        type="number"
                                        name="selling_price"
                                        class="form-control"
                                        placeholder=" Selling Price"
                                        required
                                    >
                                </div>
                            </div>

                            <!-- Short Description -->
                            <div class="mb-3">
                                <label class="form-label">Product Short Description</label>
                                <textarea
                                    name="short_description"
                                    class="form-control"
                                    rows="3"
                                    placeholder="Enter Product description"
                                    required
                                ></textarea>
                            </div>

                            <!-- Long Description -->
                            <div class="mb-3">
                                <label class="form-label">Product Long Description</label>
                                <textarea name="long_description" id="summernote"></textarea>
                            </div>

                            <!-- Meta Title -->
                            <div class="mb-3">
                                <label class="form-label">Meta Title</label>
                                <input
                                    type="text"
                                    name="meta_title"
                                    class="form-control"
                                    placeholder="Enter Meta title"
                                    required
                                >
                            </div>
                            <!-- Meta Description -->
                            <div class="mb-3">
                                <label class="form-label">Meta Description</label>
                                <textarea
                                    name="meta_description"
                                    class="form-control"
                                    rows="3"
                                    placeholder="Enter Meta Description"
                                    required
                                ></textarea>
                            </div>


                            <div class="mb-3 col-md-4">
                                <label for="image" class="form-label">Product Image</label>
                                <input type="file" name="image" class="dropify" data-height="200" />
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Product Other Image</label>
                                <input
                                    id="demo"
                                    type="file"
                                    name="others_image[]"
                                    accept=" image/jpeg, image/png, image/jpg"
                                    multiple
                                />
                            </div>
                            <div class="form-group">
                                <label class="form-label">Feature Status</label>
                                <select class="form-control select2 form-select" name="feature_status" data-placeholder="Choose one">
                                    <option label="Choose one"></option>
                                    <option value="1">Featured</option>
                                    <option value="0">Non-Featured</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Status</label>
                                <select class="form-control select2 form-select"  name="status"  data-placeholder="Choose one">
                                    <option label="Choose one"></option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>


                            <!-- Submit Button -->
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">
                                    Save Product
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- page -->





            </div>
        </div>
    </div>
@endsection

