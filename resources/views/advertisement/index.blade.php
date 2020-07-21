@extends('layouts.app')

@section('content')
    <h1>Список обьявлений</h1>
    @foreach ($advertisements as $advertisement)
        <a href="{{route('advertisement.show', $advertisement->id)}}">{{$advertisement->title}}</a>
        <div>{{Str::limit($advertisement->description, 200)}}</div>
    @endforeach
@endsection