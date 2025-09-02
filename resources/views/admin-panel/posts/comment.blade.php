@extends('admin-panel.master')
@section('title', 'Posts')
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
                <h2 class="mb-3">Comments</h2>
                {{-- @if (session('error'))
                    <div class="d-flex justify-content-between alert alert-danger" role="alert">
                        <span>{{ session('error') }}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif --}}
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <tbody>
                        @if ($comments->count() < 1)
                            No Comment
                        @endif
                        @foreach ($comments as $index => $comment)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $comment->text }}</td>
                                <td class="d-flex justify-content-center align-items-center">
                                    <form action="{{ url('admin/comments/' . $comment->id . '/show_hide') }}" method="POST">
                                        @csrf
                                        <button type="submit"
                                            class="btn btn-sm 
                                            {{ $comment->status == 'show' ? 'btn-warning' : 'btn-success' }}">
                                            {{ $comment->status == 'show' ? 'Hide' : 'Show' }}
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-body-secondary">
                {{ $comments->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
@endsection
