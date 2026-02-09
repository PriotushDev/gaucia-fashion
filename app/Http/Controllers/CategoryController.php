<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $query = Category::query();

        // Search by name
        if ($request->filled('q')) {
            $query->where('name', 'like', '%'.$request->q.'%');
        }

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $categories = $query->latest()
            ->paginate(10)
            ->withQueryString(); // keep q & status on pagination

        return view('admin.categories.index', compact('categories'));
    }



    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        // 1️⃣ Validation (standard)
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status'      => 'required|boolean',
        ]);

        // 2️⃣ Image upload (if exists)
        if ($request->hasFile('image')) {
            $imageName = Str::uuid() . '.' . $request->image->extension();
            $validated['image'] = $request->image->storeAs(
                'categories',
                $imageName,
                'public'
            );
        }

        // 3️⃣ Save using Eloquent
        Category::create($validated);

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'Category created successfully');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        // 1️⃣ Validation
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status' => 'required|boolean',
        ]);

        // 2️⃣ If new image uploaded, replace old one
        if ($request->hasFile('image')) {

            // delete old image (safety)
            if ($category->image && Storage::disk('public')->exists($category->image)) {
                Storage::disk('public')->delete($category->image);
            }

            $imageName = Str::uuid() . '.' . $request->image->extension();
            $validated['image'] = $request->image->storeAs(
                'categories',
                $imageName,
                'public'
            );
        }
        // 3️⃣ Update
        $category->update($validated);

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'Category updated successfully');
    }

    public function destroy(Category $category)
    {
        $category->delete(); // image auto-deleted by model event
        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'Category deleted successfully');
    }


    public function toggleStatus(Category $category): JsonResponse
    {
        $category->status = !$category->status;
        $category->save();

        return response()->json([
            'success' => true,
            'status'  => $category->status,
            'message' => 'Status updated successfully',
        ]);
    }




}
