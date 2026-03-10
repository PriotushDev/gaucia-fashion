<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UnitController extends Controller
{
    public function index()
    {
        $units = Unit::latest()->paginate(10);
        return view('admin.units.index', compact('units'));
    }

    public function create()
    {
        return view('admin.units.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:50|unique:units,code',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'status' => 'required|boolean',
        ]);

        if ($request->hasFile('image')) {
            $imageName = Str::uuid().'.'.$request->image->extension();
            $validated['image'] =
                $request->image->storeAs('units', $imageName, 'public');
        }

        Unit::create($validated);

        return redirect()
            ->route('admin.units.index')
            ->with('success', 'Unit created successfully');
    }

    public function edit(Unit $unit)
    {
        return view('admin.units.edit', compact('unit'));
    }

    public function update(Request $request, Unit $unit)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:50|unique:units,code,' . $unit->id,
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'status' => 'required|boolean',
        ]);

        if ($request->hasFile('image')) {

            if ($unit->image &&
                Storage::disk('public')->exists($unit->image)) {
                Storage::disk('public')->delete($unit->image);
            }

            $imageName = Str::uuid().'.'.$request->image->extension();
            $validated['image'] =
                $request->image->storeAs('units', $imageName, 'public');
        }

        $unit->update($validated);

        return redirect()
            ->route('admin.units.index')
            ->with('success', 'Unit updated successfully');
    }

    public function destroy(Unit $unit)
    {
        $unit->delete();

        return redirect()
            ->route('admin.units.index')
            ->with('success', 'Unit deleted successfully');
    }

    public function toggleStatus(Unit $unit)
    {
        $unit->status = !$unit->status;
        $unit->save();

        return response()->json([
            'success' => true,
            'status' => $unit->status
        ]);
    }
}
