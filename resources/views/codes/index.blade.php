@extends('app')

@section('content')

    @foreach($codes as $key => $code)
        <li>{{ $code }}
            <a href="{{ route('codes.edit', $key) }}"> Edit</a>
            <a href="{{ route('codes.destroy', $key) }}"> Delete</a>
        </li>
    @endforeach

@endsection