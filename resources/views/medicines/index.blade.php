@extends('layout')

@section('content')
<a href="{{ route('medicines.create') }}" class="btn btn-primary mb-3">Add Medicine</a>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Use</th>
        <th>Side Effects</th>
        <th>Price</th>
        <th>Actions</th>
    </tr>
    @foreach ($medicines as $medicine)
    <tr>
        <td>{{ $medicine->id }}</td>
        <td>{{ $medicine->name }}</td>
        <td>{{ $medicine->use }}</td>
        <td>{{ $medicine->side_effects }}</td>
        <td>${{ $medicine->price }}</td>
        <td>
            <a href="{{ route('medicines.edit', $medicine->id) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('medicines.destroy', $medicine->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
