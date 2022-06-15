@extends('layouts.app')

@section('content')
    <form action="{{route('article.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" placeholder="Article Title" value="{{old('title')}}">
            @error('title')
                <small>{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="30" rows="10">{{old('content')}}</textarea>
            @error('content')
                <small>{{$message}}</small>
            @enderror
        </div>

        <button type="submit">Post</button>
    </form>
@endsection
