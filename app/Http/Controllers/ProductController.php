<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Brand;
use App\Models\Unit;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{

    public function index()
    {

        $products = Product::latest()->paginate(10);

        return view(
            'admin.products.index',
            compact('products')
        );

    }


    public function create()
    {
        $categories = Category::where('status',1)->get();
        $subcategories = SubCategory::where('status',1)->get();
        $brands = Brand::where('status',1)->get();
        $units = Unit::where('status',1)->get();

        return view('admin.products.create',
            compact('categories','subcategories','brands','units'));
    }


    public function store(Request $request)
    {

        $validated = $request->validate([

            'category_id'=>'required',
            'subcategory_id'=>'nullable',
            'brand_id'=>'nullable',
            'unit_id'=>'required',

            'name'=>'required',
            'code'=>'nullable',

            'stock'=>'nullable',
            'price'=>'nullable',

            'short_description'=>'nullable',
            'description'=>'nullable',

            'thumbnail'=>'nullable|image',

            'images.*'=>'image',

            'feature_status'=>'required|boolean',
            'status'=>'required|boolean'
        ]);


        if($request->hasFile('thumbnail'))
        {
            $thumbnailName = Str::uuid().'.'.$request->thumbnail->extension();

            $validated['thumbnail'] =
                $request->thumbnail->storeAs('products',$thumbnailName,'public');
        }


        $product = Product::create($validated);


        if($request->hasFile('images'))
        {

            foreach($request->file('images') as $image)
            {

                $imageName = $image->store('products','public');

                ProductImage::create([

                    'product_id'=>$product->id,
                    'image'=>$imageName

                ]);

            }

        }


        return redirect()
            ->route('admin.products.index')
            ->with('success','Product created successfully');

    }


    public function edit(Product $product)
    {
        $product->load('images');

        $categories = Category::all();
        $subcategories = SubCategory::all();
        $brands = Brand::all();
        $units = Unit::all();

        return view('admin.products.edit',
            compact('product','categories','subcategories','brands','units'));
    }


    public function update(Request $request, Product $product)
    {

        $validated = $request->validate([

            'category_id'=>'required',
            'subcategory_id'=>'nullable',
            'brand_id'=>'nullable',
            'unit_id'=>'required',

            'name'=>'required',
            'code'=>'nullable',

            'stock'=>'nullable',
            'price'=>'nullable',

            'short_description'=>'nullable',
            'description'=>'nullable',

            'thumbnail'=>'nullable|image',

            'feature_status'=>'required|boolean',
            'status'=>'required|boolean'
        ]);


        if($request->hasFile('thumbnail'))
        {

            if($product->thumbnail &&
                Storage::disk('public')->exists($product->thumbnail))
            {
                Storage::disk('public')->delete($product->thumbnail);
            }

            $thumbnailName = Str::uuid().'.'.$request->thumbnail->extension();

            $validated['thumbnail'] =
                $request->thumbnail->storeAs('products',$thumbnailName,'public');
        }

        if($request->hasFile('images'))
        {
            foreach($request->file('images') as $image)
            {
                $path = $image->store('products','public');

                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => $path
                ]);
            }
        }


        $product->update($validated);


        return redirect()
            ->route('admin.products.index')
            ->with('success','Product updated successfully');

    }


    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()
            ->route('admin.products.index')
            ->with('success','Product deleted successfully');
    }

    public function deleteImage(ProductImage $image)
    {
        Storage::disk('public')->delete($image->image);

        $image->delete();

        return response()->json([
            'success' => true
        ]);
    }


    public function toggleStatus(Product $product)
    {
        $product->status = !$product->status;

        $product->save();

        return response()->json([
            'success' => true,
            'status' => $product->status
        ]);
    }


}
