@extends('layout')

@section('content')
<h3>Edit Medicine</h3>

<form action="{{ route('medicines.update', $medicine->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="{{ $medicine->name }}">
    </div>
    <div class="mb-3">
        <label>Use</label>
        <input type="text" name="use" class="form-control" value="{{ $medicine->use }}">
    </div>
    <div class="mb-3">
        <label>Side Effects</label>
        <input type="text" name="side_effects" class="form-control" value="{{ $medicine->side_effects }}">
    </div>
    <div class="mb-3">
        <label>Price</label>
        <input type="number" step="0.01" name="price" class="form-control" value="{{ $medicine->price }}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('medicines.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection
