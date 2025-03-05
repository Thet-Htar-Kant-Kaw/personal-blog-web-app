@extends('admin-panel.master')
@section('title', 'Skills')
@section('content')
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <h2 class="mb-3">Add Skills</h2>
                @if (session('success'))
                    <div class="d-flex justify-content-between alert alert-success" role="alert">
                        <span>{{ session('success') }}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>                            
                @endif
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