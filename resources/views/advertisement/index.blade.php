@extends('layouts.app')

@section('content')
    <h1>Список обьявлений</h1>
    @foreach ($advertisements as $advertisement)
        <h2>{{$advertisement->title}}</h2>
        <div>{{Str::limit($advertisement->description, 200)}}</div>
    @endforeach
@endsection