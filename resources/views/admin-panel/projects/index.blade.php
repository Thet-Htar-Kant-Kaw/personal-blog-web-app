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
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#projectModal">
                    <i class="fas fa-circle-plus"></i> Add Projects
                </button>
                {{-- @if (session('error'))
                    <div class="d-flex justify-content-between alert alert-danger" role="alert">
                        <span>{{ session('error') }}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif --}}
            </div>
            {{-- Add projects modal --}}
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
                                    <label for="projectUrl" class="form-label">Project URL</label>
                                    <input type="url" class="form-control @error('projectUrl') is-invalid @enderror" name="projectUrl" value="{{ old('projectUrl') }}" id="projectUrl">
                                    @error('projectUrl')
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
                        <th>Project Name</th>
                        <th>Project URL</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->id }}</td>
                            <td>{{ $project->name }}</td>
                            <td>{{ $project->url }}</td>
                            <td class="d-flex justify-content-center align-items-center">
                                <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning me-2"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('projects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete &quot;{{ $project->name }}&quot; project?');">
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
                {{ $projects->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
@endsection