<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    public function index()
    {
        $subCategories = SubCategory::with('category')
            ->latest()
            ->paginate(10);

        return view('admin.sub-categories.index', compact('subCategories'));
    }

    public function create()
    {
        $categories = Category::where('status',1)->get();
        return view('admin.sub-categories.create',
            compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|max:2048',
            'status'      => 'required|boolean',
        ]);

        if ($request->hasFile('image')) {
            $imageName = Str::uuid().'.'.$request->image->extension();
            $validated['image'] =
                $request->image->storeAs('subcategories',
                    $imageName,'public');
        }

        SubCategory::create($validated);

        return redirect()
            ->route('admin.subcategories.index')
            ->with('success','Sub Category created successfully');
    }

    public function edit(SubCategory $subcategory)
    {
//        dd($subCategory);
        $categories = Category::where('status',1)->get();

        return view('admin.sub-categories.edit',
            compact('subcategory','categories'));
    }

    public function update(Request $request, SubCategory $subcategory)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|max:2048',
            'status'      => 'required|boolean',
        ]);

        if ($request->hasFile('image')) {

            if ($subcategory->image &&
                Storage::disk('public')->exists($subcategory->image)) {
                Storage::disk('public')->delete($subcategory->image);
            }

            $imageName = Str::uuid().'.'.$request->image->extension();
            $validated['image'] =
                $request->image->storeAs('subcategories',
                    $imageName,'public');
        }

        $subcategory->update($validated);

        return redirect()
            ->route('admin.subcategories.index')
            ->with('success','Sub Category updated successfully');
    }

    public function destroy(SubCategory $subCategory, $id)
    {
        $subCategory = SubCategory::findOrFail($id);
//        dd($subCategory->id);
        if ($subCategory->image &&
            \Storage::disk('public')->exists($subCategory->image)) {
            \Storage::disk('public')->delete($subCategory->image);
        }

        $subCategory->delete();

        return redirect()
            ->route('admin.subcategories.index')
            ->with('success', 'Sub Category deleted successfully');
    }

    public function toggleStatus(SubCategory $subCategory)
    {
        $subCategory->status = !$subCategory->status;
        $subCategory->save();

        return response()->json(['success'=>true]);
    }




}
