@extends('backend.layouts.app')

@section('title', 'News')
@section('page-title', 'News')

@section('content')

    <section class="bg-white p-4">
        <div class="text-end">
            <!-- Base Buttons -->
            <a href="{{ route('news.create') }}" class="btn btn-primary waves-effect waves-light">Create</a>
        </div>
        <!-- Striped Rows -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($recentNews as $key => $news)
                    <tr>
                        <th scope="row"> {{ $recentNews->perPage() * ($recentNews->currentPage() - 1) + ++$key }}</th>
                        <td>
                            <!-- Thumbnails Images -->
                            {{-- <img class="img-thumbnail" alt="" width="200"
                                src="{{ getAssetUrl($news->gallery->name, '/uploads/recentNews') }}"> --}}
                        </td>
                        <td>{{ $news->title }}</td>
                        <td>{{ $news->category->name }}</td>
                        <td>
                            <div class="hstack gap-3 flex-wrap">
                                <a href="{{ route('news.edit', $news) }}" class="link-success fs-15"><i
                                        class="ri-edit-2-line"></i></a>

                                <a href="javascript:void(0)" class="link-danger fs-15 waves-effect waves-light ms-2"
                                    onclick="deleteRecord({{ $news->id }})"><i class="ri-delete-bin-line"></i></a>
                                <form id="delete-form-{{ $news->id }}"
                                    action="{{ route('news.delete', $news->id) }}" method="POST"
                                    style="display: none">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-danger text-center">No News Found!</td>
                    </tr>
                @endforelse


            </tbody>
        </table>
        <div class="mt-4">
            {{ $recentNews->links('pagination::bootstrap-5') }}
        </div>
    </section>

@endsection

@push('js')
    <script type="text/javascript">
        function deleteRecord(id) {
            Swal.fire({
                html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon><div class="mt-4 pt-2 fs-15 mx-5"><h4>Are you Sure ?</h4><p class="text-muted mx-4 mb-0">Are you want to delete?</p></div></div>',
                showCancelButton: !0,
                confirmButtonClass: "btn btn-primary w-xs me-2 mb-1",
                confirmButtonText: "Yes, Delete It!",
                cancelButtonClass: "btn btn-danger w-xs mb-1",
                buttonsStyling: !1,
                showCloseButton: false,
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-' + id).submit();
                }
            })
        }
    </script>
@endpush
