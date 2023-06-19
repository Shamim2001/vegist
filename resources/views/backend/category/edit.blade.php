@extends('backend.layouts.app')

@section('title', 'Edit Category')
@section('page-title', 'Edit Category')

@section('content')

    <section class="bg-white p-4">
        <div class="text-end">
            <!-- Base Buttons -->
            <a href="{{ route('category.index') }}" class="btn btn-primary waves-effect waves-light">Back</a>
        </div>


        <form action="{{ route('category.edit', $category) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Basic Input -->
            <div class="mb-3">
                <label for="catname" class="form-label">Name</label>
                <input type="text" class="form-control" id="catname" name="name" value="{{ $category->name }}">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <!-- Basic Input -->
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ $category->slug }}">
                @error('slug')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <!-- Default File Input Example -->
            <div class="mb-3">
                <label for="thumbnail" class="form-label">Thumbnail</label>
                <input class="form-control" type="file" id="thumbnail" name="thumbnail" value="{{ $category->thumbnail }}">
                <img width="80" height="80" src="{{ getAssetUrl($category->thumbnail, '/uploads') }}" alt="">
                @error('thumbnail')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <hr>
            <div class="">
                <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
            </div>
        </form>

    </section>

@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $('input#catname').keyup(function() {
                let val = $(this).val();
                console.log(val);
                $('input#slug').val(val.toLowerCase().replace(/ /g, "-").replace(/[^\w-]+/g, ""));
            });
        });
    </script>
@endpush
