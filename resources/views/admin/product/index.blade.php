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
            All Products
        </h2>

        <a title="Create" href="javascript:;" data-tw-toggle="modal" data-tw-target="#create-modal"
            class="btn btn-primary shadow-md mr-2 ">Add New Product</a>

        <div class="grid grid-cols-12 gap-6 mt-5">

            <!-- BEGIN: Data List -->
            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible" style="overflow: scroll">
                <table id="myTable" class="table table-report -mt-2">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap">Image</th>
                            <th class="whitespace-nowrap">Product Title</th>
                            <th class="whitespace-nowrap">slug</th>
                            <th class="whitespace-nowrap">Description</th>
                            <th class="whitespace-nowrap">Quantity</th>
                            <th class="whitespace-nowrap">SKU</th>
                            <th class="whitespace-nowrap">Price</th>
                            <th class="whitespace-nowrap">Availability</th>
                            <th class="whitespace-nowrap">Category</th>
                            <th class="whitespace-nowrap">Brand</th>
                            <th class="whitespace-nowrap">Shipping Type</th>
                            <th class="whitespace-nowrap">Active</th>
                            {{-- <th class="text-center whitespace-nowrap">STATUS</th> --}}
                            <th class="whitespace-nowrap">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr class="intro-x">
                                <td class="w-40">
                                    <div class="flex">
                                        <div class="w-10 h-10 image-fit zoom-in">
                                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full"
                                                src="{{ asset('admin/assets/images/' . $product->image) }}"
                                                title="Uploaded at 28 May 2020">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-slate-500 whitespace-nowrap mt-0.5">{{ $product->title }}</div>
                                </td>
                                <td>
                                    <div class="text-slate-500 whitespace-nowrap mt-0.5">{{ $product->slug }}</div>
                                </td>
                                <td>
                                    <div class="text-slate-500 whitespace-nowrap mt-0.5">{{ $product->description }}</div>
                                </td>
                                <td>
                                    <div class="text-slate-500 whitespace-nowrap mt-0.5">{{ $product->quantity }}</div>
                                </td>
                                <td>
                                    <div class="text-slate-500 whitespace-nowrap mt-0.5">{{ $product->sku }}</div>
                                </td>
                                <td>
                                    <div class="text-slate-500 whitespace-nowrap mt-0.5">{{ $product->price }}</div>
                                </td>
                                <td>
                                    <div class="text-slate-500 whitespace-nowrap mt-0.5">
                                        {{ ucfirst(str_replace('_', ' ', $product->availability)) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="text-slate-500 whitespace-nowrap mt-0.5">{{ $product->category->name }}
                                    </div>
                                </td>

                                <td>
                                    <div class="text-slate-500 whitespace-nowrap mt-0.5">{{ $product->brand->name }}</div>
                                </td>
                                <td>
                                    <div class="text-slate-500 whitespace-nowrap mt-0.5">{{ $product->shippingtype->type }}
                                    </div>
                                </td>
                                <td>
                                    <div class="text-slate-500 whitespace-nowrap mt-0.5">
                                        {{ $product->is_active == 1 ? 'Active' : 'Inactive' }}</div>
                                </td>
                                <td class="table-report__action w-56">
                                    <div class="flex justify-center items-center">

                                        <a class="flex items-center mr-3" href="{{ route('product.edit', $product->id) }}"
                                            title="Edit"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> </a>

                                        <a title="Delete" class="flex items-center text-danger" href="javascript:;"
                                            data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <i
                                                data-lucide="trash-2" class="w-4 h-4 mr-1"></i> </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <!-- BEGIN: Delete Confirmation Modal -->
        <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="p-5 text-center">
                            <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                            <div class="text-3xl mt-5">Are you sure?</div>
                            <div class="text-slate-500 mt-2">
                                Do you really want to delete this record?
                                <br>
                                This process cannot be undone.
                            </div>
                        </div>
                        <div class="px-5 pb-8 text-center">
                            <button type="button" data-tw-dismiss="modal"
                                class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                            <button type="button" id="confirm-delete" class="btn btn-danger w-24">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Begin Create Model --}}

        <div id="create-modal" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <form id="create-form" class="intro-y box p-5">
                            <div>
                                <label for="crud-form-1" class="form-label">Product Title</label>
                                <input id="crud-form-1" name="title" type="text" class="form-control w-full"
                                    placeholder="Please enter product title">
                            </div>
                            <br>
                            <div>
                                <label for="form-image" class="form-label">Product Image</label>
                                <input id="form-image" name="image" type="file" class="form-control w-full">
                            </div>
                            <br>
                            <div>
                                <label for="crud-form-1" class="form-label">Product Description</label>
                                <input id="crud-form-1" name="description" type="text" class="form-control w-full"
                                    placeholder="Please enter description">
                            </div>
                            <br>
                            <div>
                                <label for="crud-form-1" class="form-label">Quantity</label>
                                <input id="crud-form-1" name="quantity" type="number" class="form-control w-full">
                            </div>
                            <br>
                            <div>
                                <label for="crud-form-1" class="form-label">SKU</label>
                                <input id="crud-form-1" name="sku" type="text" class="form-control w-full"
                                    placeholder="Please enter sku">
                            </div>
                            <br>
                            <div>
                                <label for="crud-form-1" class="form-label">Price</label>
                                <input id="crud-form-1" name="price" type="text" class="form-control w-full">
                            </div>
                            <br>
                            <div>
                                <label for="crud-form-1" class="form-label">Availability</label>
                                <select name="availability" id="availability">
                                    @foreach (['in_stock', 'out_of_stock'] as $availabilityOption)
                                        <option value="{{ $availabilityOption }}">
                                            {{ ucfirst(str_replace('_', ' ', $availabilityOption)) }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <div>
                                <label for="crud-form-2" class="form-label">Categories</label>
                                <select name="category_id" id="category_id">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <div>
                                <label for="crud-form-2" class="form-label">Brands</label>
                                <select name="brand_id" id="brand_id">
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <div>
                                <label for="crud-form-2" class="form-label">Shipping Types</label>
                                <select name="shippingtype_id" id="shippingtype_id">
                                    @foreach ($shippingtypes as $shippingtype)
                                        <option value="{{ $shippingtype->id }}">{{ $shippingtype->type }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <div class="form-check">
                                <input name="is_active" id="form-checkbox" class="form-check-input" type="checkbox"
                                    value="1">
                                <label class="form-check-label" for="form-checkbox">
                                    Active</label>

                            </div>
                            <br>
                            <div class="text-right mt-5">
                                <button type="button" data-tw-dismiss="modal"
                                    class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                                <button type="submit" class="btn btn-primary w-24">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- End create modal here --}}

    </section>
@endsection

@push('script')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

    <script src="{{ asset('custom/backend/js/products/create.js') }}"></script>
@endpush
