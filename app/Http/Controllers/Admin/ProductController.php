<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ShippingType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $shippingtypes = ShippingType::all();
        $products = Product::all();
        return view('admin.product.index', compact('products', 'categories', 'brands', 'shippingtypes'));
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
        $image = $request->image;
        $fileName = time() . '.' . $image->getClientOriginalExtension();
        $image->move('admin\assets\images', $fileName);
        Product::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'image' => $fileName,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'sku' => $request->sku,
            'price' => $request->price,
            'availability' => $request->availability,
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'shipping_type_id' => $request->shippingtype_id,
            'is_active' => $request->has('is_active') ? 1 : 0,

        ]);
        return redirect()->route('product.index');
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
        $shippingtypes = ShippingType::all();
        $brands = Brand::all();
        $categories = Category::all();
        $product =  Product::where('id', $id)->first();
        return view('admin.product.edit', compact('product', 'categories', 'brands', 'shippingtypes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $image = $request->image;
        $fileName = time() . '.' . $image->getClientOriginalExtension();
        $image->move('admin\assets\images', $fileName);

        $product = Product::where('id', $id)->first();
        $product->title = $request->title;
        $product->slug = Str::slug($request->title, '-');
        $product->image = $fileName;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->availability = $request->availability;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->shipping_type_id = $request->shippingtype_id;
        $product->is_active = $request->has('is_active') ? 1 : 0;

        $product->save();

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
