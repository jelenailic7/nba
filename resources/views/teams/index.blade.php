@extends('layouts.master',  ['teams' => $teams])
@section('content')
        <h5>Teams list</h5>
        <div class="col-md-4">
            <ul class="list-unstyled">
            @foreach ($teams as $team)
                <li>
                    <a href="/teams/{{ $team->id }}"><h4>{{ $team->name}}</h4></a> <br>
                </li>
            @endforeach
            </ul>
   
@endsection
