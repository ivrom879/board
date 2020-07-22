@extends('layouts.app')

@section('content')
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    {{ Form::model($advertisement, ['url' => route('advertisements.store')]) }}
    {{ Form::label('title', 'Название') }}
    {{ Form::text('title') }}<br>
    {{ Form::label('description', 'Содержание') }}
    {{ Form::textarea('description') }}<br>
    {{ Form::submit('Создать') }}
    {{ Form::close() }}
@endsection
