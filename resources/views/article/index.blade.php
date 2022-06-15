@extends('layouts.app')

@section('content')
<style>
    table, th, td {
      border:1px solid black;
    }

    .content{
        max-width:100px;
        overflow: hidden;
    }
</style>

    <h4>Articles</h4>
    <a href="{{route('article.create')}}">Create New Article</a>

    @if (Session::has('success'))

    <p>{{Session::get('success')}}</p>

@endif
    <table>
    <tr>
      <th>Title</th>
      <th>Content</th>
      <th>Created Date</th>
      <th>Action</th>
    </tr>


    @forelse ($articles as $article)
    <tr>
        <td><a href="{{route('article.show', ['article' => $article])}}">{{$article->title}}</a></td>
        <td class="content">{{$article->content}}</td>
        <td>{{Carbon\Carbon::parse($article->created_at)->format('Y-m-d')}}</td>
        <td>
            <div class="form-group">
                <a href="{{route('article.edit', ['article' => $article])}}">Update</a>
                <form action="{{route('article.destroy', ['article' => $article])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            </div>
        </td>
      </tr>
    @empty
      <tr>
          <td>No Data</td>
      </tr>
    @endforelse
</table>
@endsection
