@extends('admin.master')

@section('title')
    Brand Add
@endsection

@section('content')
    <div class="app-content main-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">


                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Brand</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Brand</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->


                <!-- PAGE -->
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">Brand Add</h3>
                    </div>

                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Brand Name -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Brand Name</label>
                                <input
                                    type="text"
                                    name="name"
                                    id="name"
                                    class="form-control"
                                    placeholder="Enter brand name"
                                    required
                                >
                            </div>

                            <!-- Brand Description -->
                            <div class="mb-3">
                                <label for="description" class="form-label">Brand Description</label>
                                <textarea name="description" id="description" class="form-control" rows="3" placeholder="Enter brand description" required ></textarea>
                            </div>

                            <!-- Brand Image -->
                            <div class="mb-3">
                                <label for="image" class="form-label">Brand Image</label>
                                <input
                                    type="file"
                                    name="image"
                                    id="image"
                                    class="form-control"
                                    required
                                >
                            </div>

                            <!-- Status -->
                            <div class="mb-3">
                                <label class="form-label d-block">Status</label>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="active" value="1" checked>
                                    <label class="form-check-label" for="active">Active</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="inactive" value="0">
                                    <label class="form-check-label" for="inactive">Inactive</label>
                                </div>
                            </div>


                            <!-- Submit Button -->
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">
                                    Save Brand
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
