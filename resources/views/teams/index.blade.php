@extends('layouts.master')
@section('content')
        <h5>Teams list</h5>
            <ul class="list-unstyled">
            @foreach ($teams as $team)
                <li>
                    <a href="/teams/{{ $team->id }}"><h6>{{ $team->name}}</h6></a>
                </li>
            @endforeach
            </ul>
   
@endsection
