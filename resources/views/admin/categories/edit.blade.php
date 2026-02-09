@extends('admin.master')

@section('title')
    Category Edit
@endsection

@section('content')
    <div class="app-content main-content mt-0">
        <div class="side-app">
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Category</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item">Category</li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- PAGE -->
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">Category Edit</h3>
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

                        <form action="{{ route('admin.categories.update', $category->id) }}"
                              method="POST"
                              enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Category Name -->
                            <div class="mb-3">
                                <label class="form-label">Category Name</label>
                                <input type="text"
                                       name="name"
                                       value="{{ old('name', $category->name) }}"
                                       class="form-control"
                                       placeholder="Enter category name">
                            </div>

                            <!-- Category Description -->
                            <div class="mb-3">
                                <label class="form-label">Category Description</label>
                                <textarea name="description"
                                          class="form-control"
                                          rows="3"
                                          placeholder="Enter category description">{{ old('description', $category->description) }}</textarea>
                            </div>

                            <!-- Category Image -->
                            <!-- Category Image -->
                            <div class="mb-3">
                                <label class="form-label">Category Image</label><br>

                                {{-- Existing image --}}
                                <img id="imagePreview"
                                     src="{{ $category->image ? asset('storage/'.$category->image) : '' }}"
                                     alt="Category Image"
                                     style="max-width: 120px; margin-bottom: 10px; {{ $category->image ? '' : 'display:none;' }}"
                                     class="border rounded">

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
                                    <input class="form-check-input"
                                           type="radio"
                                           name="status"
                                           value="1"
                                        {{ old('status', $category->status) == 1 ? 'checked' : '' }}>
                                    <label class="form-check-label">Active</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input"
                                           type="radio"
                                           name="status"
                                           value="0"
                                        {{ old('status', $category->status) == 0 ? 'checked' : '' }}>
                                    <label class="form-check-label">Inactive</label>
                                </div>
                            </div>

                            <!-- Submit -->
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">
                                    Update Category
                                </button>

                                <a href="{{ route('admin.categories.index') }}"
                                   class="btn btn-secondary">
                                    Back
                                </a>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- PAGE END -->

            </div>
        </div>
    </div>
@endsection
