<!-- resources/views/admin/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>Admin - Thesis Details</h2>

    <div>
        <strong>Title:</strong> {{ $thesis->title }}
    </div>
    <div>
        <strong>Author:</strong> {{ $thesis->author }}
    </div>
    <!-- Display other thesis details as needed -->

    <a href="{{ route('admin.index') }}" class="btn btn-primary">Back to List</a>
@endsection
