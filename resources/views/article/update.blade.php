@extends('layouts.app')

@section('content')

    @if (Session::has('success'))

        <p>{{Session::get('success')}}</p>

    @endif
    <form action="{{route('article.update', ['article' => $article])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" placeholder="Article Title" value="{{$article->title ?? old('title')}}">
            @error('title')
                <small>{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="30" rows="10">{{$article->content ?? old('content')}}</textarea>
            @error('content')
                <small>{{$message}}</small>
            @enderror
        </div>

        <button type="submit">Update</button>
    </form>
@endsection
