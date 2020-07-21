@extends('layouts.app')

@section('content')
    <h1>{{$advertisement->title}}</h1>
    <div>{{$advertisement->description}}</div>
@endsection