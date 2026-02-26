@extends('admin.master')

@section('title')
    Edit Brand
@endsection

@section('content')
    <div class="app-content main-content mt-0">
        <div class="side-app">
            <div class="main-container container-fluid">

                <!-- PAGE HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Brand</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item">Brand</li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                    </div>
                </div>
                <!-- END HEADER -->

                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">Edit Brand</h3>
                    </div>

                    <div class="card-body">

                        {{-- Validation Errors --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('admin.brands.update', $brand->id) }}"
                              method="POST"
                              enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Brand Name -->
                            <div class="mb-3">
                                <label class="form-label">Brand Name</label>
                                <input type="text"
                                       name="name"
                                       value="{{ old('name', $brand->name) }}"
                                       class="form-control"
                                       placeholder="Enter brand name">
                            </div>

                            <!-- Description -->
                            <div class="mb-3">
                                <label class="form-label">Brand Description</label>
                                <textarea name="description"
                                          rows="3"
                                          class="form-control"
                                          placeholder="Enter brand description">{{ old('description', $brand->description) }}</textarea>
                            </div>

                            <!-- Image -->
                            <div class="mb-3">
                                <label class="form-label">Brand Image</label><br>

                                {{-- Existing Image --}}
                                <img id="imagePreview"
                                     src="{{ $brand->image ? asset('storage/'.$brand->image) : '' }}"
                                     alt="Brand Image"
                                     width="100"
                                     class="mb-2 border rounded"
                                     style="{{ $brand->image ? '' : 'display:none;' }}">

                                <input type="file"
                                       name="image"
                                       class="form-control"
                                       accept="image/*"
                                       onchange="previewImage(event)">
                            </div>

                            <!-- Status -->
                            <div class="mb-3">
                                <label class="form-label d-block">Status</label>

                                <div class="form-check form-check-inline">
                                    <input type="radio"
                                           name="status"
                                           value="1"
                                           class="form-check-input"
                                        {{ old('status', $brand->status) == 1 ? 'checked' : '' }}>
                                    <label class="form-check-label">Active</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input type="radio"
                                           name="status"
                                           value="0"
                                           class="form-check-input"
                                        {{ old('status', $brand->status) == 0 ? 'checked' : '' }}>
                                    <label class="form-check-label">Inactive</label>
                                </div>
                            </div>

                            <!-- Buttons -->
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">
                                    Update Brand
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


@section('scripts')
    <script>
        function previewImage(event) {
            const image = document.getElementById('imagePreview');
            const file = event.target.files[0];

            if (file) {
                image.src = URL.createObjectURL(file);
                image.style.display = 'block';
            }
        }
    </script>
@endsection
