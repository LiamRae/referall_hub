@extends('app')

@section('content')

{!! Form::open(['method' => 'POST', 'action' => 'CodesController@store']) !!}

    <div class="form-group">
        {!! Form::label('referall_code', 'Referall Code') !!}
        {!! Form::text('referall_code', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Submit Code', ['class' => 'btn btn-primary form-control']) !!}
    </div>

{!! Form::close() !!}

    @include('errors.list')

@endsection