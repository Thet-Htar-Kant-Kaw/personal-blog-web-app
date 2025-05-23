@extends('admin-panel.master')
@section('title', 'Update Project')
@section('content')
<div class="container mt-3">
    <a href="{{ route('projects.index') }}" class="btn btn-secondary">Back</a>
    <br><br>
    <div class="card">
        <div class="card-header">
            <h4>Update Project</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('projects.update', $project->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="projectName" class="form-label">Project Name</label>
                    <input type="text" class="form-control @error('projectName') is-invalid @enderror" id="projectName" name="projectName" value="{{ $project->name }}">
                    @error('projectName')
                        <div class="text-danger">{{ $message }}</div>                    
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="projectUrl" class="form-label">Project URL</label>
                    <input type="text" class="form-control @error('projectUrl') is-invalid @enderror" id="projectUrl" name="projectUrl" value="{{ $project->url }}">
                    @error('projectUrl')
                        <div class="text-danger">{{ $message }}</div>                    
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection