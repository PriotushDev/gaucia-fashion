@extends('admin.master')

@section('title')
    Brand List
@endsection

@section('content')
    <div class="app-content main-content mt-0">
        <div class="side-app">
            <div class="main-container container-fluid">

                <div class="page-header">
                    <h1 class="page-title">Brand</h1>
                </div>

                <style>
                    .switch {
                        position: relative;
                        display: inline-block;
                        width: 46px;
                        height: 24px;
                    }
                    .switch input { opacity: 0; width: 0; height: 0; }
                    .slider {
                        position: absolute;
                        cursor: pointer;
                        inset: 0;
                        background-color: #ccc;
                        transition: .4s;
                        border-radius: 24px;
                    }
                    .slider:before {
                        position: absolute;
                        content: "";
                        height: 18px;
                        width: 18px;
                        left: 3px;
                        bottom: 3px;
                        background-color: white;
                        transition: .4s;
                        border-radius: 50%;
                    }
                    input:checked + .slider {
                        background-color: #28a745;
                    }
                    input:checked + .slider:before {
                        transform: translateX(22px);
                    }
                </style>

                <script>
                    function toggleBrandStatus(brandId, checkbox) {
                        axios.post(`/admin/brands/${brandId}/toggle-status`)
                            .catch(() => {
                                checkbox.checked = !checkbox.checked;
                            });
                    }
                </script>



                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h3 class="card-title">Brand List</h3>
                        <a href="{{ route('admin.brands.create') }}"
                           class="btn btn-primary btn-sm">
                            Add Brand
                        </a>
                    </div>

                    <!-- FILTER SECTION -->
                    <form method="GET"
                          action="{{ route('admin.brands.index') }}"
                          class="row g-3 mb-3">

                        <div class="col-md-4">
                            <input type="text"
                                   name="q"
                                   value="{{ request('q') }}"
                                   class="form-control"
                                   placeholder="Search by brand name">
                        </div>

                        <div class="col-md-3">
                            <select name="status" class="form-control">
                                <option value="">All Status</option>
                                <option value="1"
                                    {{ request('status') === '1' ? 'selected' : '' }}>
                                    Active
                                </option>
                                <option value="0"
                                    {{ request('status') === '0' ? 'selected' : '' }}>
                                    Inactive
                                </option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <button class="btn btn-primary">
                                Filter
                            </button>

                            <a href="{{ route('admin.brands.index') }}"
                               class="btn btn-secondary">
                                Reset
                            </a>
                        </div>

                    </form>


                    <div class="card-body">

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-bordered text-nowrap">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @forelse($brands as $brand)
                                    <tr>

                                        <td>{{ $loop->iteration }}</td>

                                        <td>{{ $brand->name }}</td>

                                        <td>{{ \Illuminate\Support\Str::limit($brand->description, 50) }}</td>

                                        <td>
                                            @if($brand->image)
                                                <img src="{{ asset('storage/'.$brand->image) }}"
                                                     width="60">
                                            @else
                                                —
                                            @endif
                                        </td>

                                        <td>
                                            <label class="switch">
                                                <input type="checkbox"
                                                       {{ $brand->status ? 'checked' : '' }}
                                                       onchange="toggleBrandStatus({{ $brand->id }}, this)">
                                                <span class="slider round"></span>
                                            </label>
                                        </td>

                                        <td>

                                            <a href="{{ route('admin.brands.edit', $brand->id) }}"
                                               class="btn btn-warning btn-sm">
                                                Edit
                                            </a>

                                            <form action="{{ route('admin.brands.destroy', $brand->id) }}"
                                                  method="POST"
                                                  class="d-inline">
                                                @csrf
                                                @method('DELETE')

                                                <button class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Delete this brand?')">
                                                    Delete
                                                </button>
                                            </form>

                                        </td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">
                                            No Brand Found
                                        </td>
                                    </tr>
                                @endforelse
                                </tbody>

                            </table>
                        </div>

                        {{ $brands->links() }}

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
