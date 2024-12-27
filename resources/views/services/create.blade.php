@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Service</h1>
        <form action="{{ route('services.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Service Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="description">Service Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Save Service</button>
        </form>
    </div>
@endsection
