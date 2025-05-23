@extends('admin-panel.master')
@section('title', 'Update Skill')
@section('content')
<div class="container mt-3">
    <a href="{{ route('skills.index') }}" class="btn btn-secondary">Back</a>
    <br><br>
    <div class="card">
        <div class="card-header">
            <h4>Update Skill</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('skills.update', $skill->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="skillName" class="form-label">Skill Name</label>
                    <input type="text" class="form-control @error('skillName') is-invalid @enderror" id="skillName" name="skillName" value="{{ $skill->name }}">
                    @error('skillName')
                        <div class="text-danger">{{ $message }}</div>                    
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="skillPercentage" class="form-label">Skill Percentage</label>
                    <input type="number" class="form-control @error('skillPercentage') is-invalid @enderror" id="skillPercentage" name="skillPercentage" value="{{ $skill->percentage }}">
                    @error('skillPercentage')
                        <div class="text-danger">{{ $message }}</div>                    
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>    
</div>
@endsection