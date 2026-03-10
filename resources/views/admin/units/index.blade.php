@extends('admin.master')

@section('title')
    Unit List
@endsection

@section('content')
    <style>
        .switch { position: relative; display: inline-block; width: 46px; height: 24px; }
        .switch input { opacity: 0; width: 0; height: 0; }
        .slider { position: absolute; cursor: pointer; inset: 0; background-color: #ccc; transition: .4s; border-radius: 24px; }
        .slider:before { position: absolute; content: ""; height: 18px; width: 18px; left: 3px; bottom: 3px; background-color: white; transition: .4s; border-radius: 50%; }
        input:checked + .slider { background-color: #28a745; }
        input:checked + .slider:before { transform: translateX(22px); }

    </style>

    <div class="app-content main-content mt-0">
        <div class="side-app">
            <div class="main-container container-fluid">

                <div class="page-header">
                    <h1 class="page-title">Unit</h1>
                </div>


                <div class="card">

                    <div class="card-header d-flex justify-content-between">
                        <h3 class="card-title">Unit List</h3>

                        <a href="{{ route('admin.units.create') }}"
                           class="btn btn-primary btn-sm">

                            Add Unit

                        </a>
                    </div>


                    <div class="card-body">

                        @if(session('success'))

                            <div class="alert alert-success">

                                {{ session('success') }}

                            </div>

                        @endif


                        <table class="table table-bordered">

                            <thead>

                            <tr>

                                <th>SL</th>

                                <th>Name</th>

                                <th>Code</th>

                                <th>Status</th>

                                <th>Action</th>

                            </tr>

                            </thead>


                            <tbody>

                            @forelse($units as $unit)

                                <tr>

                                    <td>{{ $loop->iteration }}</td>

                                    <td>{{ $unit->name }}</td>

                                    <td>{{ $unit->code }}</td>


                                    <td>
                                        <label class="switch">
                                            <input type="checkbox"
                                                   {{ $unit->status ? 'checked' : '' }}
                                                   onchange="toggleUnitStatus({{ $unit->id }}, this)">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>


                                    <td>

                                        <a href="{{ route('admin.units.edit',$unit->id) }}"
                                           class="btn btn-warning btn-sm">

                                            Edit

                                        </a>


                                        <form action="{{ route('admin.units.destroy',$unit->id) }}"
                                              method="POST"
                                              class="d-inline">

                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-danger btn-sm">

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


                        {{ $units->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('scripts')

    <script>

        function toggleUnitStatus(id, checkbox)
        {
            axios.post("{{ url('admin/units') }}/" + id + "/toggle-status")

                .then(function(response){

                    console.log("Status updated");

                })

                .catch(function(){

                    checkbox.checked = !checkbox.checked;

                    alert("Status update failed");

                });
        }

    </script>

@endsection
