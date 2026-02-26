@extends('admin.master')

@section('title')
    Add Sub Category
@endsection

@section('content')
    <div class="app-content main-content mt-0">
        <div class="side-app">
            <div class="main-container container-fluid">

                <!-- PAGE HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Sub Category</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.subcategories.index') }}">
                                    Sub Category
                                </a>
                            </li>
                            <li class="breadcrumb-item active">Add</li>
                        </ol>
                    </div>
                </div>

                <!-- CARD -->
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">Add Sub Category</h3>
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

                        <form action="{{ route('admin.subcategories.store') }}"
                              method="POST"
                              enctype="multipart/form-data">
                        @csrf

                        <!-- CATEGORY -->
                            <div class="row mb-3">
                                <label class="col-md-3 form-label">
                                    Category <span class="text-danger">*</span>
                                </label>
                                <div class="col-md-9">
                                    <select name="category_id"
                                            class="form-control">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- NAME -->
                            <div class="row mb-3">
                                <label class="col-md-3 form-label">
                                    Sub Category Name <span class="text-danger">*</span>
                                </label>
                                <div class="col-md-9">
                                    <input type="text"
                                           name="name"
                                           value="{{ old('name') }}"
                                           class="form-control"
                                           placeholder="Enter sub category name">
                                </div>
                            </div>

                            <!-- DESCRIPTION -->
                            <div class="row mb-3">
                                <label class="col-md-3 form-label">
                                    Description
                                </label>
                                <div class="col-md-9">
                        <textarea name="description"
                                  rows="3"
                                  class="form-control"
                                  placeholder="Enter description">{{ old('description') }}</textarea>
                                </div>
                            </div>

                            <!-- IMAGE -->
                            <div class="row mb-3">
                                <label class="col-md-3 form-label">
                                    Image
                                </label>
                                <div class="col-md-9">
                                    <input type="file"
                                           name="image"
                                           class="form-control"
                                           accept="image/*">
                                </div>
                            </div>

                            <!-- STATUS -->
                            <div class="row mb-3">
                                <label class="col-md-3 form-label">
                                    Status
                                </label>
                                <div class="col-md-9">
                                    <div class="form-check form-check-inline">
                                        <input type="radio"
                                               name="status"
                                               value="1"
                                               class="form-check-input"
                                            {{ old('status',1) == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label">
                                            Active
                                        </label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio"
                                               name="status"
                                               value="0"
                                               class="form-check-input"
                                            {{ old('status') == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label">
                                            Inactive
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- BUTTON -->
                            <div class="row">
                                <div class="col-md-9 offset-md-3">
                                    <button type="submit"
                                            class="btn btn-primary">
                                        Save Sub Category
                                    </button>

                                    <a href="{{ route('admin.subcategories.index') }}"
                                       class="btn btn-secondary">
                                        Back
                                    </a>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
