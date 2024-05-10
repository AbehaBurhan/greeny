<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;



class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Brand::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
            $image = $request->image,
            $fileName = time() . '.' . $image->getClientOriginalExtension(),
            $image->move('admin/assets/images', $fileName),
            'image' => $fileName,
            'is_active' => $request->has('is_active') ? 1 : 0,

        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $brand = Brand::where('id', $id)->first();
        return view('admin.brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $brand = Brand::where('id', $id)->first();
        $brand->name = $request->name;
        $brand->slug = Str::slug($request->name, '-');
        $image = $request->image;
        $fileName = time() . '.' . $image->getClientOriginalExtension();
        $image->move('admin/assets/images', $fileName);
        $brand->image = $fileName;
        $brand->is_active = $request->has('is_active') ? 1 : 0;

        $brand->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $brand = Brand::where('id', $id)->first();
        $brand->delete();
        return redirect()->route('brand.index');
    }
}
