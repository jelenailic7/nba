@extends('layouts.master')
@section('content')
<h5>Team details:</h5>
<p>{{$team->name}}</p>
<p>{{$team->email}}</p>
<p>{{$team->address}}</p>
<p>{{$team->city}}</p>
<p>Players:</p>
<ul class="list-unstyled">
  @foreach($team->players as $player)
    <li>
      <p><a href="/players/{{ $player->id }}">{{ $player->first_name }} {{ $player->last_name }}</a></p>
    </li>
  @endforeach
</ul>
@endsection