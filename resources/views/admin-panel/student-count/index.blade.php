@extends('admin-panel.master')
@section('title', 'Student Count')
@section('content')
<div class="container mt-3">
    @if (session('success'))
        <div class="d-flex justify-content-between alert alert-success" role="alert">
            <span>{{ session('success') }}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2 class="mb-3">Student Count</h2>
            @if ($studentCount->count() < 1)
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#projectModal">
                    <i class="fas fa-circle-plus"></i> Add Student Count
                </button>
            @endif
        </div>
        <div class="card-body">
            @if ($studentCount->count() < 1)
                <form action={{ route('student-count.store') }} method="POST" class="mb-4">
                    @csrf
                    <div class="input-group">
                        <input type="number" class="form-control @error('count') is-invalid @enderror" name="count"
                            style="border-radius: 4px 0 0 4px;">
                        <button class="btn btn-primary" style="border-radius: 0 4px 4px 0;">Create</button>
                        @error('count')
                            <small class="text-danger p-2">{{ $message }}</small>
                        @enderror
                    </div>
                </form>
            @endif
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="px-3">Count</th>
                        <th class="px-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($studentCount as $count)
                        <tr>
                            <td class="px-3">{{ $count->count }}</td>
                            <td class="px-3">
                                <input type="hidden" name="id" value="{{ $count->id }}">
                                <button type="submit" id="addBtn" class="btn btn-outline-primary">
                                    <i class="fas fa-circle-plus"></i> Add Student Count
                                </button>

                                <form action="{{ url('admin/student-count/'.$count->id.'/update') }}" method="POST" id="addForm"
                                    class="col-md-6" style="display: none;">
                                    @csrf
                                    @method('PUT')
                                    <div class="input-group">
                                        <input type="number" class="form-control @error('count') is-invalid @enderror"
                                            name="count" style="border-radius: 4px 0 0 4px;">
                                        <button type="submit" class="btn btn-primary"
                                            style="border-radius: 0 4px 4px 0;">Add</button>
                                        @error('count')
                                            <small class="text-danger p-2">{{ $message }}</small>
                                        @enderror
                                        <input type="hidden" name="id" value="{{ $count->id }}">
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer text-body-secondary">
            {{-- {{ $projects->links('pagination::bootstrap-5') }} --}}
        </div>
    </div>
</div>
@endsection

@section('javascript')
<script>
    $(document).ready(function () {
        $('#addBtn').click(function (e) {
            e.preventDefault();
            $('#addForm').css('display', 'block');
            $(this).css('display', 'none');
        });
    });
</script>
@endsection
