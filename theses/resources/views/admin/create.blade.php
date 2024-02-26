<!-- resources/views/admin/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>Admin - Create Thesis</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="author">Author:</label>
            <input type="text" name="author" class="form-control" required>
        </div>
        <!-- Add other form fields as needed -->
        <button type="submit" class="btn btn-success">Create Thesis</button>
    </form>
@endsection
