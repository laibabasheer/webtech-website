@extends('layouts.app')

@section('content')
    <h1>{{ $service->name }}</h1>
    <p>{{ $service->description }}</p>
    <a href="{{ route('services') }}" class="btn btn-secondary">Back to Services</a>
@endsection
