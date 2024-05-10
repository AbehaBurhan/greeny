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
                <form id="edit-form" class="intro-y box p-5" method="POST"
                    action="{{ route('shipping.update', $shipping->id) }}">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="shipping_name" class="form-label">Shipping Name</label>
                        <input id="name" name="name" type="text" class="form-control w-full"
                            value="{{ $shipping->name }}">
                    </div>
                    <br>
                    <div class="flex">
                        <div class="flex-col mr-4">
                            <label for="minimun_days" class="form-label">Minimum Days</label>
                            <input id="min_days" name="min_days" type="number" class="form-control w-full"
                                value="{{ $shipping->min_days }}">
                        </div>

                        <div class="flex-col">
                            <label for="maximum_days" class="form-label">Maximun days</label>
                            <input id="max_days" name="max_days" type="number" class="form-control w-full"
                                value="{{ $shipping->max_days }}">
                        </div>
                    </div>
                    <br>
                    <div class="flex">
                        <div class="flex-col mr-4">
                            <label for="shipping_cost" class="form-label">Cost</label>
                            <input id="cost" name="cost" type="text" class="form-control w-full"
                                value="{{ $shipping->cost }}">
                        </div>

                        <div class="flex-col">
                            <label for="shipping_type" class="form-label">Type</label>
                            <br>
                            <select name="type" id="type" class="form-select">
                                <option value="international" {{ $shipping->type == 'international' ? 'selected' : '' }}>
                                    International</option>
                                <option value="national"{{ $shipping->type == 'national' ? 'selected' : '' }}>
                                    National</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-check">
                        <input name="is_active" id="form-checkbox" class="form-check-input" type="checkbox" value="1"
                            {{ $shipping->is_active == 1 ? 'checked' : '' }}>
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
        var shippingURL = "/admin/shipping/" + {{ $shipping->id }};
    </script>
    <script src="{{ asset('custom/backend/js/shipping/update.js') }}"></script>
@endpush
