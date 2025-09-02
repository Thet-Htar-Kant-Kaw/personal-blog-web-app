@extends('admin-panel.master')
@section('title', 'Add Posts')
@section('content')
<div class="container mt-3">
    <a href="{{ url('admin/posts') }}" class="btn btn-secondary">Back</a>
    <br><br>
    <div class="card">
        <div class="card-header">
            <h4>Add New Post</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/posts') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select name="categoryId" class="form-control form-select">
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach 
                    </select>
                    @error('categoryId')
                        <div class="text-danger">{{ $message }}</div>                    
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label><br>
                    <input type="file" name="image" class="@error('image') is-invalid @enderror"><br>
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>                    
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>                    
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea name="content" rows="4" class="form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
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