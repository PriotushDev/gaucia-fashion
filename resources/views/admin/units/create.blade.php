@extends('admin.master')

@section('title')
    Unit Add
@endsection

@section('content')
    <div class="app-content main-content mt-0">
        <div class="side-app">

            <div class="main-container container-fluid">

                <!-- PAGE HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Unit</h1>
                    </div>

                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Unit</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE HEADER END -->


                <!-- CARD -->
                <div class="card">

                    <div class="card-header border-bottom">
                        <h3 class="card-title">Unit Add</h3>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('admin.units.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Unit Name -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Unit Name</label>

                                <input
                                    type="text"
                                    name="name"
                                    id="name"
                                    class="form-control"
                                    placeholder="Enter Unit Name"
                                    required
                                >

                            </div>


                            <!-- Unit Code -->
                            <div class="mb-3">
                                <label for="code" class="form-label">Unit Code</label>

                                <input
                                    type="text"
                                    name="code"
                                    id="code"
                                    class="form-control"
                                    placeholder="Enter Unit Code"
                                    required
                                >

                            </div>


                            <!-- Unit Description -->
                            <div class="mb-3">

                                <label for="description" class="form-label">Unit Description</label>

                                <textarea
                                    name="description"
                                    id="description"
                                    class="form-control"
                                    rows="3"
                                    placeholder="Enter Unit description"
                                    required
                                ></textarea>

                            </div>


                            <!-- Unit Image -->
                            <div class="mb-3">

                                <label for="image" class="form-label">Unit Image</label>

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


                            <!-- Submit -->
                            <div class="text-end">

                                <button type="submit" class="btn btn-primary">
                                    Save Unit
                                </button>

                            </div>

                        </form>

                    </div>
                </div>
                <!-- CARD END -->

            </div>
        </div>
    </div>
@endsection
