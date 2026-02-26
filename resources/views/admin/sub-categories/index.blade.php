@extends('admin.master')

@section('title')
    Sub Category List
@endsection

@section('content')
    <div class="app-content main-content mt-0">
        <div class="side-app">
            <div class="main-container container-fluid">

                <div class="page-header">
                    <h1 class="page-title">Sub Category</h1>
                </div>

                <style>
                    .switch { position: relative; display: inline-block; width: 46px; height: 24px; }
                    .switch input { opacity: 0; width: 0; height: 0; }
                    .slider { position: absolute; cursor: pointer; inset: 0; background-color: #ccc; transition: .4s; border-radius: 24px; }
                    .slider:before { position: absolute; content: ""; height: 18px; width: 18px; left: 3px; bottom: 3px; background-color: white; transition: .4s; border-radius: 50%; }
                    input:checked + .slider { background-color: #28a745; }
                    input:checked + .slider:before { transform: translateX(22px); }

                </style>

                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h3 class="card-title">Sub Category List</h3>
                        <a href="{{ route('admin.subcategories.create') }}"
                           class="btn btn-primary btn-sm">
                            Add Sub Category
                        </a>
                    </div>

                    <div class="card-body">

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Category</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @forelse($subCategories as $subCategory)
                                    <tr>

                                        <td>{{ $loop->iteration }}</td>

                                        <td>{{ $subCategory->category->name ?? '-' }}</td>

                                        <td>{{ $subCategory->name }}</td>

                                        <td>
                                            <label class="switch">
                                                <input type="checkbox"
                                                       {{ $subCategory->status ? 'checked' : '' }}
                                                       onchange="toggleSubCategoryStatus({{ $subCategory->id }}, this)">
                                                <span class="slider round"></span>
                                            </label>
                                        </td>

                                        <td>
                                            <a href="{{ route('admin.subcategories.edit', $subCategory->id) }}"
                                               class="btn btn-warning btn-sm">
                                                Edit
                                            </a>

                                            <form action="{{ route('admin.subcategories.destroy', $subCategory->id) }}"
                                                  method="POST"
                                                  class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Delete this sub category?')">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">
                                            No Data Found
                                        </td>
                                    </tr>
                                @endforelse
                                </tbody>

                            </table>
                        </div>

                        {{ $subCategories->links() }}

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function toggleSubCategoryStatus(id, checkbox) {
            axios.post(`/admin/subcategories/${id}/toggle-status`)
                .catch(() => {
                    checkbox.checked = !checkbox.checked;
                });
        }
    </script>
@endsection
