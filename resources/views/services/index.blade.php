@extends('layouts.app')

@section('content')
    <h1>Our Services</h1>
    <ul class="list-group">
        @foreach($services as $service)
            <li class="list-group-item">
                <a href="{{ route('services.show', $service->id) }}">{{ $service->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection
