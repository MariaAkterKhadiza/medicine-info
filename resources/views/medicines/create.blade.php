@extends('layout')

@section('content')
<h3>Add Medicine</h3>

<form action="{{ route('medicines.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label>Use</label>
        <input type="text" name="use" class="form-control">
    </div>
    <div class="mb-3">
        <label>Side Effects</label>
        <input type="text" name="side_effects" class="form-control">
    </div>
    <div class="mb-3">
        <label>Price</label>
        <input type="number" step="0.01" name="price" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Save</button>
    <a href="{{ route('medicines.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection
