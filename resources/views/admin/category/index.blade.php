@extends('admin.master')

@section('title')
    Category List
@endsection

@section('content')
    <div class="app-content main-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">


                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Category</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Category</a></li>
                            <li class="breadcrumb-item active" aria-current="page">List</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">Category List</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                        <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">SL</th>
                                            <th class="wd-15p border-bottom-0">Category Name</th>
                                            <th class="wd-15p border-bottom-0">Description</th>
                                            <th class="wd-20p border-bottom-0">Image</th>
                                            <th class="wd-15p border-bottom-0">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Electronics</td>
                                            <td>32 inch TV is best sell on market</td>
                                            <td>photo</td>
                                            <td>Active</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->






            </div>
        </div>
    </div>
@endsection
