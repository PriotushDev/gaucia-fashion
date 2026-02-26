<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    public function index(Request $request)
    {
        $query = Brand::query();

        // Search by name
        if ($request->filled('q')) {
            $query->where('name', 'like', '%' . $request->q . '%');
        }

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $brands = $query->latest()
            ->paginate(10)
            ->withQueryString();

        return view('admin.brands.index', compact('brands'));
    }


    public function create()
    {
        return view('admin.brands.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status'      => 'required|boolean',
        ]);

        if ($request->hasFile('image')) {
            $imageName = Str::uuid().'.'.$request->image->extension();
            $validated['image'] = $request->image->storeAs('brands', $imageName, 'public');
        }

        Brand::create($validated);

        return redirect()
//            ->route('admin.brands.index')
            ->back()
            ->with('success', 'Brand created successfully');
    }

    public function edit(Brand $brand)
    {
        return view('admin.brands.edit', compact('brand'));
    }

    public function update(Request $request, Brand $brand)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status'      => 'required|boolean',
        ]);

        if ($request->hasFile('image')) {
            // delete old image safely
            if ($brand->image && Storage::disk('public')->exists($brand->image)) {
                Storage::disk('public')->delete($brand->image);
            }
            $imageName = Str::uuid().'.'.$request->image->extension();
            $validated['image'] = $request->image->storeAs('brands', $imageName, 'public');
        }

        $brand->update($validated);

        return redirect()
            ->route('admin.brands.index')
            ->with('success', 'Brand updated successfully');
    }

    public function destroy(Brand $brand)
    {
        $brand->delete(); // model event handles image delete
        return redirect()
            ->route('admin.brands.index')
            ->with('success', 'Brand deleted successfully');
    }

    public function toggleStatus(Brand $brand)
    {
        $brand->status = !$brand->status;
        $brand->save();

        return response()->json([
            'success' => true,
            'status'  => $brand->status
        ]);
    }

}
