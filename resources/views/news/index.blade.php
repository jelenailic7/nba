@extends('layouts.master')
@section('content')
<a href="{{ route('create-news') }}">Create new news </a>
        <h5>News</h5>
        <div class="col-md-4">
            <ul class="list-unstyled">
            @foreach ($news as $oneNews)
                <li>
                    <a href="/news/{{ $oneNews->id }}"><h4>{{ $oneNews->title}}</h4></a> <br>
                </li>
            @endforeach
            </ul>
    </div>
@endsection
