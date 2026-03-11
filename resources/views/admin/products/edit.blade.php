@extends('admin.master')

@section('title')
    Edit Product
@endsection


@section('content')

    <div class="app-content main-content mt-0">
        <div class="side-app">

            <div class="main-container container-fluid">

                <!-- PAGE HEADER -->

                <div class="page-header">

                    <div>
                        <h1 class="page-title">Product</h1>
                    </div>

                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Product</a></li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                    </div>

                </div>


                <div class="row row-sm">
                    <div class="col-lg-12">

                        <div class="card">

                            <div class="card-header border-bottom">
                                <h3 class="card-title">Edit Product</h3>
                            </div>


                            <div class="card-body">

                                <form action="{{ route('admin.products.update',$product->id) }}"
                                      method="POST"
                                      enctype="multipart/form-data">

                                    @csrf
                                    @method('PUT')


                                    <div class="row">


                                        <!-- Category -->

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Category</label>

                                            <select name="category_id" class="form-control">

                                                @foreach($categories as $category)

                                                    <option value="{{ $category->id }}"
                                                        {{ $product->category_id == $category->id ? 'selected':'' }}>

                                                        {{ $category->name }}

                                                    </option>

                                                @endforeach

                                            </select>
                                        </div>


                                        <!-- Subcategory -->

                                        <div class="col-md-6 mb-3">

                                            <label class="form-label">Subcategory</label>

                                            <select name="subcategory_id" class="form-control">

                                                <option value="">Select Subcategory</option>

                                                @foreach($subcategories as $sub)

                                                    <option value="{{ $sub->id }}"
                                                        {{ $product->subcategory_id == $sub->id ? 'selected':'' }}>

                                                        {{ $sub->name }}

                                                    </option>

                                                @endforeach

                                            </select>

                                        </div>


                                        <!-- Brand -->

                                        <div class="col-md-6 mb-3">

                                            <label class="form-label">Brand</label>

                                            <select name="brand_id" class="form-control">

                                                <option value="">Select Brand</option>

                                                @foreach($brands as $brand)

                                                    <option value="{{ $brand->id }}"
                                                        {{ $product->brand_id == $brand->id ? 'selected':'' }}>

                                                        {{ $brand->name }}

                                                    </option>

                                                @endforeach

                                            </select>

                                        </div>


                                        <!-- Unit -->

                                        <div class="col-md-6 mb-3">

                                            <label class="form-label">Unit</label>

                                            <select name="unit_id" class="form-control">

                                                @foreach($units as $unit)

                                                    <option value="{{ $unit->id }}"
                                                        {{ $product->unit_id == $unit->id ? 'selected':'' }}>

                                                        {{ $unit->name }}

                                                    </option>

                                                @endforeach

                                            </select>

                                        </div>


                                        <!-- Product Name -->

                                        <div class="col-md-6 mb-3">

                                            <label class="form-label">Product Name</label>

                                            <input
                                                type="text"
                                                name="name"
                                                class="form-control"
                                                value="{{ $product->name }}"
                                                required>

                                        </div>


                                        <!-- Code -->

                                        <div class="col-md-6 mb-3">

                                            <label class="form-label">Code</label>

                                            <input
                                                type="text"
                                                name="code"
                                                class="form-control"
                                                value="{{ $product->code }}">

                                        </div>


                                        <!-- Stock -->

                                        <div class="col-md-6 mb-3">

                                            <label class="form-label">Stock</label>

                                            <input
                                                type="number"
                                                name="stock"
                                                class="form-control"
                                                value="{{ $product->stock }}">

                                        </div>


                                        <!-- Price -->

                                        <div class="col-md-6 mb-3">

                                            <label class="form-label">Price</label>

                                            <input
                                                type="number"
                                                step="0.01"
                                                name="price"
                                                class="form-control"
                                                value="{{ $product->price }}">

                                        </div>


                                        <!-- Short Description -->

                                        <div class="col-md-12 mb-3">

                                            <label class="form-label">Short Description</label>

                                            <textarea
                                                name="short_description"
                                                class="form-control"
                                                rows="3">{{ $product->short_description }}</textarea>

                                        </div>


                                        <!-- Description -->

                                        <div class="col-md-12 mb-3">

                                            <label class="form-label">Description</label>

                                            <textarea
                                                name="description"
                                                class="form-control"
                                                id="summernote"
                                                rows="5">{!! $product->description !!}</textarea>

                                        </div>


                                        <!-- Thumbnail -->

                                        <div class="col-md-6 mb-3">

                                            <label class="form-label">Thumbnail</label>

                                            <input
                                                type="file"
                                                name="thumbnail"
                                                class="form-control">

                                            @if($product->thumbnail)

                                                <div class="mt-2">
                                                    <img src="{{ asset('storage/'.$product->thumbnail) }}" width="100" class="border ">
                                                </div>

                                            @endif

                                        </div>


                                        <!-- Feature Status -->

                                        <div class="col-md-6 mb-3">

                                            <label class="form-label">Feature Status</label>

                                            <select name="feature_status" class="form-control">

                                                <option value="1"
                                                    {{ $product->feature_status ? 'selected':'' }}>
                                                    Featured
                                                </option>

                                                <option value="0"
                                                    {{ !$product->feature_status ? 'selected':'' }}>
                                                    Not Featured
                                                </option>

                                            </select>

                                        </div>


                                        <!-- Product Gallery -->

                                        <div class="mb-3">

                                            <label class="form-label">Product Gallery</label>

                                            <div class="row">

                                                @foreach($product->images as $image)

                                                    <div class="col-md-2 text-center mb-3">

                                                        <img src="{{ asset('storage/'.$image->image) }}"
                                                             class="img-fluid border mb-2">

                                                        <br>

                                                        <button
                                                            type="button"
                                                            class="btn btn-danger btn-sm"
                                                            onclick="deleteImage({{ $image->id }})">

                                                            Delete

                                                        </button>

                                                    </div>

                                                @endforeach

                                            </div>

                                        </div>


                                        <!-- Upload New Images -->

                                        <div class="mb-3">

                                            <label class="form-label">Add More Images</label>

                                            <input
                                                type="file"
                                                name="images[]"
                                                multiple
                                                class="form-control">

                                        </div>


                                        <!-- Status -->

                                        <div class="col-md-6 mb-3">

                                            <label class="form-label">Status</label>

                                            <select name="status" class="form-control">

                                                <option value="1"
                                                    {{ $product->status ? 'selected':'' }}>
                                                    Active
                                                </option>

                                                <option value="0"
                                                    {{ !$product->status ? 'selected':'' }}>
                                                    Inactive
                                                </option>

                                            </select>

                                        </div>


                                    </div>


                                    <div class="text-end mt-3">

                                        <button class="btn btn-primary">
                                            Update Product
                                        </button>

                                    </div>


                                </form>

                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection

@section('scripts')

    <script>

        function deleteImage(id)
        {
            if(confirm("Delete this image?"))
            {
                axios.delete("{{ url('admin/product-images') }}/" + id)

                    .then(function(){
                        location.reload();
                    })

                    .catch(function(){
                        alert("Image delete failed");
                    });
            }
        }

    </script>

@endsection
