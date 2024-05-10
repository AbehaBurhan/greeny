@extends('admin.layouts.master')

@section('admin-content')
    <section>
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Edit Catagory
            </h2>
        </div>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 lg:col-span-6">
                <!-- BEGIN: Form Layout -->

                {{-- <div class="intro-y box p-5"> --}}
                <form id="edit-form" class="intro-y box p-5">
                    @method('PUT')
                    <div>
                        <label for="name" class="form-label">Catagory Name</label>
                        <input id="edit-form-name" value="{{ $category->name }}" name="name" type="text"
                            class="form-control w-full">
                    </div>
                    <br>
                    <div>
                        <label for="image" class="form-label">Catagory Image</label>
                        <input id="edit-form-image" name="image" type="file" value="{{ $category->image }}"
                            class="form-control w-full">
                    </div>
                    <br>
                    <div class="form-check"> <input name="is_active" class="form-check-input" type="checkbox" value="1"
                            {{ $category->is_active == 1 ? 'checked' : '' }}> <label class="form-check-label"
                            for="horizontal-form-3">Active</label>
                    </div>
                    <br>
                    <div class="text-right mt-5">
                        <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <button type="submit" class="btn btn-primary w-24">Update</button>
                    </div>

                </form>

                {{-- </div> --}}
                <!-- END: Form Layout -->
            </div>
        </div>
    </section>
@endsection
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    var categoryURL = "/admin/category/" + {{ $category->id }};
</script>
<script src="{{ asset('custom/backend/js/category/update.js') }}"></script>
