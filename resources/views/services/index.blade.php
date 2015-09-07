@extends('app')

@section('content')
    @foreach($services as $service)
        <li>{{ $service->name }}<a href="{{ url('/services', $service->id) }}">Take a code</a></li>
    @endforeach
@endsection