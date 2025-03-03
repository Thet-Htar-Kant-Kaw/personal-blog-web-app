@extends('admin-panel.master')
@section('title', 'Edit User')
@section('content')
<div class="container mt-3">
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
    <br><br>
    <h2 class="mb-4">User Management</h2>
    <div class="card">
        <div class="card-header">
            <h4>Edit User</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-select" id="role" name="status">
                        <option value="admin" {{ $user->status == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="user" {{ $user->status == 'user' ? 'selected' : '' }}>User</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>    
</div>
@endsection