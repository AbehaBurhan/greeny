@extends('admin.layouts.master')

@push('style')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
@endpush
@section('admin-content')
    <!-- END: Top Bar -->
    <section>
        @if (session()->has('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ session()->get('success') }}</strong>
            </div>
        @endif
        <h2 class="intro-y text-lg font-medium mt-10">
            Edit Shipping
        </h2>

        <div class="grid grid-cols-12 gap-6 mt-5">

            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                <form id="edit-form" class="intro-y box p-5">
                    {{-- @method('PUT') --}}
                    <div>
                        <label for="crud-form-1" class="form-label">Product Title</label>
                        <input id="crud-form-1" name="title" type="text" class="form-control w-full"
                            value="{{ $product->title }}">
                    </div>
                    <br>
                    <div>
                        <label for="form-image" class="form-label">Product Image</label>
                        <input id="form-image" name="image" type="file"
                            class="form-control w-full"><span>{{ $product->image }}</span>
                    </div>
                    <br>
                    <div>
                        <label for="crud-form-1" class="form-label">Product Description</label>
                        <input id="crud-form-1" name="description" type="text" class="form-control w-full"
                            value="{{ $product->description }}">
                    </div>
                    <br>
                    <div>
                        <label for="crud-form-1" class="form-label">Quantity</label>
                        <input id="crud-form-1" name="quantity" type="number" class="form-control w-full"
                            value="{{ $product->quantity }}">
                    </div>
                    <br>
                    <div>
                        <label for="crud-form-1" class="form-label">SKU</label>
                        <input id="crud-form-1" name="sku" type="text" class="form-control w-full"
                            value="{{ $product->sku }}">
                    </div>
                    <br>
                    <div>
                        <label for="crud-form-1" class="form-label">Price</label>
                        <input id="crud-form-1" name="price" type="text" class="form-control w-full"
                            value="{{ $product->price }}">
                    </div>
                    <br>
                    <div>
                        <label for="crud-form-1" class="form-label">Availability</label>
                        <select name="availability" id="availability">
                            @foreach (['in_stock', 'out_of_stock'] as $availabilityOption)
                                <option value="{{ $availabilityOption }}"
                                    {{ $availabilityOption == 'in_stock' ? 'selected' : '' }}>
                                    {{ ucfirst(str_replace('_', ' ', $availabilityOption)) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div>
                        <label for="crud-form-2" class="form-label">Categories</label>
                        <select name="category_id" id="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div>
                        <label for="crud-form-2" class="form-label">Brands</label>
                        <select name="brand_id" id="brand_id">
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}"
                                    {{ $brand->id == $product->brand_id ? 'selected' : '' }}>{{ $brand->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div>
                        <label for="crud-form-2" class="form-label">Shipping Types</label>
                        <select name="shippingtype_id" id="shippingtype_id">
                            @foreach ($shippingtypes as $shippingtype)
                                <option value="{{ $shippingtype->id }}"
                                    {{ $shippingtype->id == $product->shipping_type_id ? 'selected' : '' }}>
                                    {{ $shippingtype->type }}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div class="form-check">
                        <input name="is_active" id="form-checkbox" class="form-check-input" type="checkbox" value="1"
                            {{ $product->is_active == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="form-checkbox">
                            Active</label>

                    </div>
                    <br>
                    <div class="text-right mt-5">
                        <button type="button" data-tw-dismiss="modal"
                            class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <button type="submit" class="btn btn-primary w-24">Update</button>
                    </div>

                </form>
            </div>

        </div>



    </section>
@endsection

@push('script')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        var productURL = "/admin/product/" + {{ $product->id }};
    </script>
    <script src="{{ asset('custom/backend/js/products/update.js') }}"></script>
@endpush
