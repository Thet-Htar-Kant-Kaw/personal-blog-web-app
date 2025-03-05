@extends('admin-panel.master')
@section('title', 'Skills')
@section('content')
    <div class="container mt-3">
        <h2 class="mb-3">Add Skills</h2>
        @if (session('success'))
            <div class="d-flex justify-content-between alert alert-success" role="alert">
                <span>{{ session('success') }}</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>                            
        @endif
        <form action="{{ route('skills.store') }}" method="POST">
            @csrf
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
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <h2 class="mt-5 mb-4">Skills List</h2>
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
        <div>
        </div>
    </div>
@endsection