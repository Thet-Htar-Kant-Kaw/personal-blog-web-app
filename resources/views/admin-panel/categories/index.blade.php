@extends('admin-panel.master')
@section('title', 'Categories')
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
                <h2 class="mb-3">Add Category</h2>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#categoryModal">
                    <i class="fas fa-circle-plus"></i> Add New
                </button>
                {{-- @if (session('error'))
                    <div class="d-flex justify-content-between alert alert-danger" role="alert">
                        <span>{{ session('error') }}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif --}}
            </div>
            {{-- Add category modal --}}
            <div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="categoryModalLabel">Add Category</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ url('admin/categories') }}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="categoryName" class="form-label">Category Name</label>
                                    <input type="text" class="form-control @error('categoryName') is-invalid @enderror" name="categoryName" value="{{ old('categoryName') }}" id="categoryName">
                                    @error('categoryName')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td class="d-flex justify-content-center align-items-center">
                                <a href="{{ url("admin/categories/{$category->id}/edit") }}" class="btn btn-warning me-2"><i class="fas fa-edit"></i></a>
                                <form action="{{ url("admin/categories/{$category->id}") }}" method="POST" onsubmit="return confirm('Are you sure you want to delete &quot;{{ $category->name }}&quot; project?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>                        
                    @endforeach
                </tbody>
            </table>
            </div>
            <div class="card-footer text-body-secondary">
                {{ $categories->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
@endsection

@if ($errors->has('categoryName'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let categoryModal = new bootstrap.Modal(document.getElementById('categoryModal'));
            categoryModal.show();
        });
    </script>
@endif
