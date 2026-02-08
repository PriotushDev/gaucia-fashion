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
                        <form action="" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Brand Name -->
                            <div class="form-group">
                                <label class="form-label">Category Name</label>
                                <select class="form-control select2 form-select" data-placeholder="Choose one">
                                    <option label="Choose one"></option>
                                    <option value="1">Chuck Testa</option>
                                    <option value="2">Sage Cattabriga-Alosa</option>
                                    <option value="3">Nikola Tesla</option>
                                    <option value="4">Cattabriga-Alosa</option>
                                    <option value="5">Nikola Alosa</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Sub Category Name</label>
                                <select class="form-control select2 form-select" data-placeholder="Choose one">
                                    <option label="Choose one"></option>
                                    <option value="1">Chuck Testa</option>
                                    <option value="2">Sage Cattabriga-Alosa</option>
                                    <option value="3">Nikola Tesla</option>
                                    <option value="4">Cattabriga-Alosa</option>
                                    <option value="5">Nikola Alosa</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Brand Name</label>
                                <select class="form-control select2 form-select" data-placeholder="Choose one">
                                    <option label="Choose one"></option>
                                    <option value="1">Chuck Testa</option>
                                    <option value="2">Sage Cattabriga-Alosa</option>
                                    <option value="3">Nikola Tesla</option>
                                    <option value="4">Cattabriga-Alosa</option>
                                    <option value="5">Nikola Alosa</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label"> Product Name</label>
                                <input
                                    type="text"
                                    name="name"
                                    id="name"
                                    class="form-control"
                                    placeholder="Enter Product name"
                                    required
                                >
                            </div>

                            <!-- Brand Description -->
                            <div class="mb-3">
                                <label for="description" class="form-label">Product Short Description</label>
                                <textarea
                                    name="description"
                                    id="description"
                                    class="form-control"
                                    rows="3" placeholder="Enter Product description"
                                    required >

                                </textarea>
                            </div>

                            <!-- Summernote -->
                            <div class="">
                                <label for="description" class="form-label">Product Long Description</label>
                                <div id="summernote"><p>Hello Summernote</p></div>
                            </div>
                            <!--End Row-->

                            <div class="mb-3">
                                <label for="name" class="form-label">Meta Title</label>
                                <input
                                    type="text"
                                    name="name"
                                    id="name"
                                    class="form-control"
                                    placeholder="Enter Meta title"
                                    required
                                >
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Meta Description</label>
                                <textarea
                                    name="description"
                                    id="description"
                                    class="form-control"
                                    rows="3" placeholder="Enter Meta Description"
                                    required >

                                </textarea>
                            </div>

                            <!-- Brand Image -->
                            <div class="mb-3">
                                <label for="image" class="form-label">Product Image</label>
                                <input
                                    type="file"
                                    name="image"
                                    id="image"
                                    class="form-control"
                                    required
                                >
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="image" class="form-label">Product Image</label>
                                <input type="file" class="dropify" data-height="200" />
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Product Other Image</label>
                                <input
                                    id="demo"
                                    type="file"
                                    name="files"
                                    accept=" image/jpeg, image/png, image/jpg"
                                    multiple
                                />
                            </div>
                            <div class="form-group">
                                <label class="form-label">Feature Status</label>
                                <select class="form-control select2 form-select" data-placeholder="Choose one">
                                    <option label="Choose one"></option>
                                    <option value="1">Featured</option>
                                    <option value="2">Non-Featured</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Status</label>
                                <select class="form-control select2 form-select" data-placeholder="Choose one">
                                    <option label="Choose one"></option>
                                    <option value="1">Active</option>
                                    <option value="2">Inactive</option>
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

