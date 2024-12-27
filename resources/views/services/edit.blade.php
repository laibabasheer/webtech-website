@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Service</h1>
        <form action="{{ route('services.update', $service->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Service Name</label>
                <input type="text" name="name" class="form-control" value="{{ $service->name }}" required>
            </div>
            <div class="form-group">
                <label for="description">Service Description</label>
                <textarea name="description" class="form-control" rows="5" required>{{ $service->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-success mt-3">Update Service</button>
        </form>
    </div>
@endsection
