@extends('layouts.master')
@section('content')
        <h5>News</h5>
            <ul class="list-unstyled">
            @foreach ($news as $oneNews)
                <li>
                    <a href="/news/{{ $oneNews->id }}"><h6>{{ $oneNews->title}}</h6></a>
                </li>
            @endforeach
            </ul>
            {{ $news->links() }}
@endsection
