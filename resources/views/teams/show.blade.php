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

        <hr>
        <h6>Comments:</h6>
        <ul class="list-unstyled">
            @foreach($team->comments as $comment)
                <li>
                    <p>
                        <strong>Author:</strong> {{ $comment->user->name }}
                    </p>
                    <p>
                        {{ $comment->text }}
                    </p>
                </li>
            @endforeach
        </ul>

    <h6>Post a comment</h6>
    <form method="POST" action=" {{ route('comment-store',['id'=>$team->id])}}">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="author">Your name:</label>
            <input type="text" class="form-control" id="author" name="author"/>
        </div>

        <div class="form-group">
            <label for="text">Comment:</label>
            <textarea class="form-control" id="text" name="text"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
    @if (count($errors->all()) > 0)
            @foreach($errors->all() as $error)
            <div class="form-group">
            <div class="alert alert-danger">
            <li>{{ $error }}</li>
        </div>
    </div>

            @endforeach
         @endif
    <a href="/news/team/{{ $team->name }}">Team news </a>
@endsection