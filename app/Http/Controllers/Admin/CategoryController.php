<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());


        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),

            $image = $request->image,
            $fileName = time() . '.' . $image->getClientOriginalExtension(),
            $request->image->move('admin/assets/images', $fileName),

            'image' => $fileName,

            'is_active' => $request->has('is_active') ? 1 : 0,
        ]);

        return redirect()->back()->with('success', 'Category created successfully');
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
        $category = Category::where('id', $id)->first();
        return view('admin.category.edit', compact('category'));

        // return response()->json(['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {

            $category = Category::where('id', $id)->first();
            // dd($category);

            $category->name = $request->name;
            $category->slug = Str::slug($request->name, '-');
            $image = $request->image;
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('admin/assets/images', $fileName);
            $category->image = $fileName;
            $category->is_active = $request->has('is_active' == 1) ? 1 : 0;

            $category->save();
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::where('id', $id)->first();
        $category->delete();
        return redirect()->route('category.index');
    }
}
