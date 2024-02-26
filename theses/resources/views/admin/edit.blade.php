<!-- resources/views/admin/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>Admin - Edit Thesis</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.update', $thesis->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control" value="{{ $thesis->title }}" required>
        </div>
        <div class="form-group">
            <label for="author">Author:</label>
            <input type="text" name="author" class="form-control" value="{{ $thesis->author }}" required>
        </div>
        <!-- Add other form fields as needed -->
        <button type="submit" class="btn btn-primary">Update Thesis</button>
    </form>
@endsection
