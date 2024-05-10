<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ShippingType;
use Illuminate\Http\Request;

class ShippingTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shippings = ShippingType::all();
        return view('admin.shipping-type.index', compact('shippings'));
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
        ShippingType::create([
            'name' => $request->name,
            'min_days' => $request->min_days,
            'max_days' => $request->max_days,
            'cost' => $request->cost,
            'type' => $request->type,
            'is_active' => $request->has('is_active') ? 1 : 0,
        ]);

        return redirect()->route('shipping.index');
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
        $shipping = ShippingType::where('id', $id)->first();
        return view('admin.shipping-type.edit', compact('shipping'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $shipping = ShippingType::where('id', $id)->first();

        $shipping->name = $request->name;
        $shipping->min_days = $request->min_days;
        $shipping->max_days = $request->max_days;
        $shipping->cost = $request->cost;
        $shipping->type = $request->type;
        $shipping->is_active = $request->has('is_active') ? 1 : 0;

        $shipping->save();

        return redirect()->route('shipping.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $shipping = ShippingType::where('id', $id)->first();
        $shipping->delete();
        return redirect()->back();
    }
}
