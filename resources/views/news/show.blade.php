@extends('layouts.master')
@section('content')
    <h6>News:</h6>

    <p>{{$oneNews->title}}</p>
    <p>{{$oneNews->content}}</p>
    <p>Author: {{$oneNews->user->name}}</p>
    <p>Email: {{$oneNews->user->email}}</p>
    

@endsection