@extends('layouts.app')

@section('content')

    <h4>{{$article->title}}</h4>
    <hr>
    <p>{{$article->content}}</p>
    <hr>
    <small>{{$article->created_at}}</small>
    <hr>
    Article Vote Count: <small>{{$article->votes ?? '0'}}</small>
    <hr>
    <form action="{{route('vote.up', ['article' => $article])}}" method="post">
        @csrf
        <button type="submit">Upvote</button>
    </form>
    <form action="{{route('vote.down', ['article' => $article])}}" method="post">
        @csrf
        <button type="submit">Downvote</button>
    </form>

@endsection
