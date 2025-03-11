@extends('admin-panel.master')
@section('title', 'Projects')
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
                <h2 class="mb-3">Add Skills</h2>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#skillModal">
                    <i class="fas fa-circle-plus"></i> Add Projects
                </button>
                {{-- @if (session('error'))
                    <div class="d-flex justify-content-between alert alert-danger" role="alert">
                        <span>{{ session('error') }}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif --}}
            </div>
            {{-- Add projects --}}
            <div class="modal fade" id="projectModal" tabindex="-1" aria-labelledby="projectModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="projectModalLabel">Add Project</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('projects.store') }}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="projectName" class="form-label">Project Name</label>
                                    <input type="text" class="form-control @error('projectName') is-invalid @enderror" name="projectName" value="{{ old('projectName') }}" id="projectName">
                                    @error('projectName')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="projectDescription" class="form-label">Project Description</label>
                                    <textarea class="form-control @error('projectDescription') is-invalid @enderror" name="projectDescription" id="projectDescription" rows="3">{{ old('projectDescription') }}</textarea>
                                    @error('projectDescription')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="projectLink" class="form-label">Project Link</label>
                                    <input type="text" class="form-control @error('projectLink') is-invalid @enderror" name="projectLink" value="{{ old('projectLink') }}" id="projectLink">
                                    @error('projectLink')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add Project</button>
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
                    {{-- @foreach ($skills as $skill)
                        <tr>
                            <td>{{ $skill->id }}</td>
                            <td>{{ $skill->name }}</td>
                            <td>{{ $skill->percentage }}</td>
                            <td>
                                <a href="{{ route('skills.edit', $skill->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ url('admin/skills/'.$skill->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this skill?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach --}}
                </tbody>
            </table>
            </div>
            <div class="card-footer text-body-secondary">
                {{-- {{ $skills->links('pagination::bootstrap-5') }} --}}
            </div>
        </div>
    </div>
@endsection