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
            All Brands
        </h2>

        <a title="Create" href="javascript:;" data-tw-toggle="modal" data-tw-target="#create-modal"
            class="btn btn-primary shadow-md mr-2 ">Add New Brand</a>

        <div class="grid grid-cols-12 gap-6 mt-5">

            <!-- BEGIN: Data List -->
            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                <table id="myTable" class="table table-report -mt-2">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap">Image</th>
                            <th class="whitespace-nowrap">Brand Name</th>
                            <th class="whitespace-nowrap">slug</th>
                            <th class="whitespace-nowrap">Active</th>
                            {{-- <th class="text-center whitespace-nowrap">STATUS</th> --}}
                            <th class="whitespace-nowrap">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($brands as $brand)
                            <tr class="intro-x">
                                <td class="w-40">
                                    <div class="flex">
                                        <div class="w-10 h-10 image-fit zoom-in">
                                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full"
                                                src="{{ asset('admin/assets/images/' . $brand->image) }}"
                                                title="Uploaded at 28 May 2020">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-slate-500 whitespace-nowrap mt-0.5">{{ $brand->name }}</div>
                                </td>
                                <td>
                                    <div class="text-slate-500 whitespace-nowrap mt-0.5">{{ $brand->slug }}</div>
                                </td>

                                <td>
                                    <div class="text-slate-500 whitespace-nowrap mt-0.5">
                                        {{ $brand->is_active == 1 ? 'Active' : 'Inactive' }}</div>
                                </td>
                                <td class="table-report__action w-56">
                                    <div class="flex justify-center items-center">

                                        <a class="flex items-center mr-3" href="{{ route('brand.edit', $brand->id) }}"
                                            title="Edit"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> </a>

                                        <a title="Delete" class="flex items-center text-danger brand-delete"
                                            data-brand-id="{{ $brand->id }}" href="javascript:;" data-tw-toggle="modal"
                                            data-tw-target="#delete-confirmation-modal"> <i data-lucide="trash-2"
                                                class="w-4 h-4 mr-1"></i> </a>
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
                                <label for="crud-form-1" class="form-label">Brand Name</label>
                                <input id="crud-form-1" name="name" type="text" class="form-control w-full"
                                    placeholder="Please enter brand name">
                            </div>
                            <br>
                            <div>
                                <label for="form-image" class="form-label">Brand Image</label>
                                <input id="form-image" name="image" type="file" class="form-control w-full">
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
    <Script src="{{ asset('custom/backend/js/brands/create.js') }}"></Script>

    <script src="{{ asset('custom/backend/js/brands/delete.js') }}"></script>
@endpush
