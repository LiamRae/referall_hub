@extends('app')

@section('content')

    @foreach($codes as $key => $code)
        <li>{{ $code }}
            <a href="{{ route('codes.edit', $key) }}"> Edit</a>
            {!! Form::open(['method' => 'DELETE', 'route' => ['codes.destroy', $key]]) !!}
                {!! Form::submit('Delete this code', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}


        </li>
    @endforeach

@endsection