@extends('admin.master')

@section('title')
    Brand Add
@endsection

@section('content')
    <div class="app-content main-content mt-0">
        <div class="side-app">
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Brand</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item">Brand</li>
                            <li class="breadcrumb-item active">Add</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">Brand Add</h3>
                    </div>

                    <div class="card-body">

                        {{-- Validation errors --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('admin.brands.store') }}"
                              method="POST"
                              enctype="multipart/form-data">
                        @csrf
                            <p class="text-center text-success"> {{ session('success') }} </p>

                        <!-- Brand Name -->
                            <div class="mb-3">
                                <label class="form-label">Brand Name</label>
                                <input type="text"
                                       name="name"
                                       value="{{ old('name') }}"
                                       class="form-control"
                                       placeholder="Enter brand name">
                            </div>

                            <!-- Brand Description -->
                            <div class="mb-3">
                                <label class="form-label">Brand Description</label>
                                <textarea name="description"
                                          class="form-control"
                                          rows="3"
                                          placeholder="Enter brand description">{{ old('description') }}</textarea>
                            </div>

                            <!-- Brand Image -->
                            <div class="mb-3">
                                <label class="form-label">Brand Image</label>
                                <input type="file"
                                       name="image"
                                       class="form-control"
                                       accept="image/*">
                            </div>

                            <!-- Status -->
                            <div class="mb-3">
                                <label class="form-label d-block">Status</label>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input"
                                           type="radio"
                                           name="status"
                                           value="1"
                                        {{ old('status', 1) == 1 ? 'checked' : '' }}>
                                    <label class="form-check-label">Active</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input"
                                           type="radio"
                                           name="status"
                                           value="0"
                                        {{ old('status') == 0 ? 'checked' : '' }}>
                                    <label class="form-check-label">Inactive</label>
                                </div>
                            </div>

                            <!-- Submit -->
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">
                                    Save Brand
                                </button>
                                <a href="{{ route('admin.brands.index') }}"
                                   class="btn btn-secondary">
                                    Back
                                </a>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
