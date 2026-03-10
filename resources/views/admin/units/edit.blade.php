@extends('admin.master')

@section('title')
    Unit Edit
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
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0);">Home</a>
                            </li>

                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.units.index') }}">Unit</a>
                            </li>

                            <li class="breadcrumb-item active">
                                Edit
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE HEADER END -->


                <div class="card">

                    <div class="card-header border-bottom">
                        <h3 class="card-title">Edit Unit</h3>
                    </div>


                    <div class="card-body">

                        <form action="{{ route('admin.units.update', $unit->id) }}"
                              method="POST">

                        @csrf
                        @method('PUT')

                        <!-- Unit Name -->
                            <div class="mb-3">

                                <label for="name" class="form-label">
                                    Unit Name
                                </label>

                                <input
                                    type="text"
                                    name="name"
                                    id="name"
                                    value="{{ $unit->name }}"
                                    class="form-control"
                                    required>

                            </div>


                            <!-- Unit Code -->
                            <div class="mb-3">

                                <label for="code" class="form-label">
                                    Unit Code
                                </label>

                                <input
                                    type="text"
                                    name="code"
                                    id="code"
                                    value="{{ $unit->code }}"
                                    class="form-control"
                                    required>

                            </div>


                            <!-- Status -->
                            <div class="mb-3">

                                <label class="form-label d-block">
                                    Status
                                </label>

                                <div class="form-check form-check-inline">

                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="status"
                                        value="1"
                                        {{ $unit->status ? 'checked' : '' }}>

                                    <label class="form-check-label">
                                        Active
                                    </label>

                                </div>


                                <div class="form-check form-check-inline">

                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="status"
                                        value="0"
                                        {{ !$unit->status ? 'checked' : '' }}>

                                    <label class="form-check-label">
                                        Inactive
                                    </label>

                                </div>

                            </div>


                            <!-- Submit -->
                            <div class="text-end">

                                <button
                                    type="submit"
                                    class="btn btn-primary">

                                    Update Unit

                                </button>

                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
