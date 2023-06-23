@extends('backend.layouts.app')

@section('title', 'Edit Product')
@section('page-title', 'Edit Product')

@section('content')

    <section class="bg-white p-4">
        <div class="text-end">
            <!-- Base Buttons -->
            <a href="{{ route('product.index') }}" class="btn btn-primary waves-effect waves-light">Back</a>
        </div>


        <form action="{{ route('product.edit', $product) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-8">
                    <!-- Basic Input -->
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ $product->title }}">
                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Basic Input -->
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug"
                            value="{{ $product->title }}">
                        @error('slug')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Basic Input -->
                    <div class="mb-3">
                        <label for="excerpt" class="form-label">Excerpt</label>
                        <x-tinymce-editor name="excerpt" class="form-control">{!! $product->excerpt !!}</x-tinymce-editor>
                        @error('excerpt')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Basic Input -->
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <x-tinymce-editor name="description" id="description" >{!! $product->description !!}</x-tinymce-editor>

                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>


                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input class="form-control" type="number" id="price" name="price" value="{{ $product->price }}">
                        @error('price')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select name="category_id" id="category" class="form-select">
                            <option value="none">Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('price')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="gallery" class="form-label">Gallery</label>
                        <input class="form-control filepond" type="file" id="gallery" name="gallery[]" multiple >

                        @foreach ($product->gallery as $item )
                            <img class="mt-3 border border-info" width="50" height="50" src="{{ getAssetUrl($item->name, '/uploads/products') }}" alt="">
                        @endforeach

                        @error('gallery')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <hr>
                    <div class="">
                        <button type="submit" class="btn btn-primary waves-effect waves-light w-100">Update</button>
                    </div>
                </div>
            </div>
        </form>

    </section>

@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $('input#title').keyup(function() {
                let val = $(this).val();
                console.log(val);
                $('input#slug').val(val.toLowerCase().replace(/ /g, "-").replace(/[^\w-]+/g, ""));
            });
        });
    </script>
@endpush
