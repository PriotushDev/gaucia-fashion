@extends('admin.master')

@section('title')
    Category List
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
                            <li class="breadcrumb-item active">List</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->
                <style>
                    .switch { position: relative; display: inline-block; width: 46px; height: 24px; }
                    .switch input { opacity: 0; width: 0; height: 0; }
                    .slider { position: absolute; cursor: pointer; inset: 0; background-color: #ccc; transition: .4s; border-radius: 24px; }
                    .slider:before { position: absolute; content: ""; height: 18px; width: 18px; left: 3px; bottom: 3px; background-color: white; transition: .4s; border-radius: 50%; }
                    input:checked + .slider { background-color: #28a745; }
                    input:checked + .slider:before { transform: translateX(22px); }

                </style>
                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom d-flex justify-content-between">
                                <h3 class="card-title">Category List</h3>
                                <a href="{{ route('admin.categories.create') }}"
                                   class="btn btn-primary btn-sm">
                                    Add Category
                                </a>
                            </div>

                            <div class="card-body">

                                {{-- Flash message --}}
                                @if(session('success'))
                                    <div id="autoCloseAlert"
                                         class="alert alert-success alert-dismissible fade show d-flex justify-content-between align-items-center"
                                         role="alert">

                                        <span>{{ session('success') }}</span>

                                        <button type="button"
                                                class="close"
                                                onclick="closeAlert()"
                                                style="margin-left:auto; font-size:20px;">
                                            <span>&times;</span>
                                        </button>
                                    </div>
                                @endif

                                <form method="GET" action="{{ route('admin.categories.index') }}" class="row g-2 mb-3">
                                    <div class="col-md-4">
                                        <input type="text"
                                               name="q"
                                               value="{{ request('q') }}"
                                               class="form-control"
                                               placeholder="Search by category name">
                                    </div>

                                    <div class="col-md-3">
                                        <select name="status" class="form-control">
                                            <option value="">All Status</option>
                                            <option value="1" {{ request('status') === '1' ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ request('status') === '0' ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <button class="btn btn-primary">Filter</button>
                                        <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Reset</a>
                                    </div>
                                </form>





                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom">
                                        <thead>
                                        <tr>
                                            <th width="50">SL</th>
                                            <th>Category Name</th>
                                            <th>Description</th>
                                            <th width="120">Image</th>
                                            <th width="100">Status</th>
                                            <th width="160">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($categories as $category)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>

                                                <td>{{ $category->name }}</td>

                                                <td>{{ Str::limit($category->description, 50) }}</td>

                                                <td>
                                                    @if($category->image)
                                                        <img src="{{ asset('storage/'.$category->image) }}"
                                                             width="60">
                                                    @else
                                                        —
                                                    @endif
                                                </td>

                                                <td>
                                                    <label class="switch">
                                                        <input type="checkbox"
                                                               {{ $category->status ? 'checked' : '' }}
                                                               onchange="toggleCategoryStatus({{ $category->id }})">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </td>


                                                <td>
                                                    <a href="{{ route('admin.categories.edit', $category->id) }}"
                                                       class="btn btn-sm btn-warning">
                                                        Edit
                                                    </a>

                                                    <form action="{{ route('admin.categories.destroy', $category->id) }}"
                                                          method="POST"
                                                          class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-sm btn-danger"
                                                                onclick="return confirm('Delete this category?')">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">
                                                    No category found
                                                </td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>

                                {{ $categories->links() }}

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->

            </div>
        </div>
    </div>
@endsection
