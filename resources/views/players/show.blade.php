@extends('layouts.master')
@section('content')
    <h6>Player details:</h6>

    @if($player)
    <p>{{$player->first_name}} {{$player->last_name}}</p>
    <p>{{$player->email}}</p>
    <p><a href="/teams/{{$player->team->id }}">{{$player->team->name}}</a></p>
    @endif

@endsection