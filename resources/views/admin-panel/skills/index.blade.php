@extends('admin-panel.master')
@section('title', 'Skills')
@section('content')
    <div class="container mt-3">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h2 class="mb-3">Add Skills</h2>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#skillModal">
                    <i class="fas fa-circle-plus"></i> Add Skill
                </button>
                {{-- @if (session('error'))
                    <div class="d-flex justify-content-between alert alert-danger" role="alert">
                        <span>{{ session('error') }}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif --}}
                @if (session('success'))
                    <div class="d-flex justify-content-between alert alert-success" role="alert">
                        <span>{{ session('success') }}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>                            
                @endif
            </div>
            {{-- Add skill --}}
            <div class="modal fade" id="skillModal" tabindex="-1" aria-labelledby="skillModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="userModalLabel">Add/Edit User</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('skills.store') }}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="skillName" class="form-label">Skill Name</label>
                                    <input type="text" class="form-control @error('skillName') is-invalid @enderror" name="skillName" value="{{ old('skillName') }}" id="skillName">
                                    @error('skillName')
                                        <div class="text-danger">{{ $message }}</div>                    
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="skillPercentage" class="form-label">Skill Percentage</label>
                                    <input type="number" class="form-control @error('skillPercentage') is-invalid @enderror" name="skillPercentage" value="{{ old('skillPercentage') }}" id="skillPercentage">
                                    @error('skillPercentage')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
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
                        <th>Skill Name</th>
                        <th>Skill Percentage</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($skills as $skill)
                        <tr>
                            <td>{{ $skill->id }}</td>
                            <td>{{ $skill->name }}</td>
                            <td>{{ $skill->percentage }}</td>
                            <td>
                                <a href="{{ route('skills.edit', $skill->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('skills.destroy', $skill->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this skill?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            <div class="card-footer text-body-secondary">
                {{ $skills->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
@endsection