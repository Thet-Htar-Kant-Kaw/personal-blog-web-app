@extends('admin-panel.master')
@section('title', 'Edit Posts')
@section('content')
<div class="container mt-3">
    <a href="{{ url('admin/posts') }}" class="btn btn-secondary">Back</a>
    <br><br>
    <div class="card">
        <div class="card-header">
            <h4>Edit Post</h4>
        </div>
        <div class="card-body">
            <form action="{{ url("admin/posts/{$post->id}") }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select name="categoryId" class="form-control @error('categoryId') is-invalid @enderror form-select">
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : ''}}>
                                {{ $category->name }}
                            </option>
                        @endforeach 
                    </select>
                    @error('categoryId')
                        <div class="text-danger">{{ $message }}</div>                    
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label><br>
                    <input type="file" name="image" class="mb-2 @error('image') is-invalid @enderror"><br>
                    <img src="{{ asset("storage/post-images/{$post->image}") }}" style="width: 200px; margin: 1px solid gray;"/>
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>                    
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') ?? $post->title }}">
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>                    
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea name="content" rows="4" class="form-control @error('content') is-invalid @enderror">{{ old('content') ?? $post->content }}</textarea>
                    @error('content')
                        <div class="text-danger">{{ $message }}</div>                    
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection