@extends('admin-panel.master')
@section('title', 'Update Category')
@section('content')
<div class="container mt-3">
    <a href="{{ url('admin/categories') }}" class="btn btn-secondary">Back</a>
    <br><br>
    <div class="card">
        <div class="card-header">
            <h4>Update Category</h4>
        </div>
        <div class="card-body">
            <form action="{{ url("admin/categories/{$category->id}") }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="categoryName" class="form-label">Category Name</label>
                    <input type="text" class="form-control @error('categoryName') is-invalid @enderror" name="categoryName" value="{{ $category->name }}">
                    @error('categoryName')
                        <div class="text-danger">{{ $message }}</div>                    
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>    
</div>
@endsection