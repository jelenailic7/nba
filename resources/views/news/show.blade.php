@extends('layouts.master')
@section('content')
    <h6>News:</h6>

    <p>{{$oneNews->title}}</p>
    <p>{{$oneNews->content}}</p>
    <p class="blog-post-meta">Author: {{$oneNews->user->name}}</p>
    <p class="blog-post-meta">Email: {{$oneNews->user->email}}</p>

    @if(count($oneNews->teams))
    <ul>
    @foreach($oneNews->teams as $team)
        <li>
            <a href="/news/team/{{ $team->name }}">
            {{ $team->name }}
            </a>
        </li>
    @endforeach
    </ul>
    @endif
@endsection