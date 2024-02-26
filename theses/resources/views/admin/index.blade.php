<!-- resources/views/admin/index.blade.php -->
{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
    <h2>Admin - List of Theses</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif 

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($theses as $thesis)
                <tr>
                    <td>{{ $thesis->id }}</td>
                    <td>{{ $thesis->title }}</td>
                    <td>{{ $thesis->author }}</td>
                    <td>
                        <a href="{{ route('admin.show', $thesis->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('admin.edit', $thesis->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.destroy', $thesis->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            {{-- <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button> --}}
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
{{-- @endsection     --}}
