@extends('admin-panel.master')
@section('title', 'Posts')
@section('content')
    <div class="container mt-3">
        @if (session('success'))
            <div class="d-flex justify-content-between alert alert-success" role="alert">
                <span>{{ session('success') }}</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session('updateSuccess'))
            <div class="d-flex justify-content-between alert alert-success" role="alert">
                <span>{{ session('updateSuccess') }}</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session('deleteSuccess'))
            <div class="d-flex justify-content-between alert alert-success" role="alert">
                <span>{{ session('deleteSuccess') }}</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h2 class="mb-3">Add Posts</h2>
                <a href="{{ url('admin/posts/create') }}" type="button" class="btn btn-primary">
                    <i class="fas fa-circle-plus"></i> Add New
                </a>
                {{-- @if (session('error'))
                    <div class="d-flex justify-content-between alert alert-danger" role="alert">
                        <span>{{ session('error') }}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif --}}
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Category</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $index => $post)
                            <tr>
                                <td>{{ $index + $posts->firstItem() }}</td>
                                <td>{{ $post->category->name }}</td>
                                <td>
                                    <img src="{{ asset("storage/post-images/{$post->image}") }}" width="100px" />
                                </td>
                                <td>{{ $post->title }}</td>
                                <td><textarea readonly>{{ $post->content }}</textarea></td>
                                <td class="d-flex justify-content-center align-items-center">
                                    <a href="{{ url("admin/posts/{$post->id}/edit") }}" class="btn btn-warning me-2"><i
                                            class="fas fa-edit"></i></a>
                                    <form action="{{ url("admin/posts/{$post->id}") }}" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this post?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger me-2"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                    <a href="{{ url("admin/posts/{$post->id}") }}" class="btn btn-info"><i
                                            class="fas fa-comments"></i></a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-body-secondary">
                {{ $posts->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
@endsection
