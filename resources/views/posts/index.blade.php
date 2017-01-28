@extends('default')
@section('stylesheets')
  <link rel="stylesheet" type="text/css" href="css/style.css">
@stop

@section('content')

<div class="row">
  <div class="col-md-10">
    <h1>Alle berichten</h1>
  </div>

  <div class="col-md-2">
    <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-index-create">Nieuw bericht</a>
  </div>
</div>
<hr>

<div class="row">
  <div class="col-md-12">
    <table class="table">
      <thead>
        <th>Titel</th>
        <th>Bericht</th>
        <th></th>
      </thead>
      <tbody>
        @foreach ($posts as $post)
          <tr>
            <td>{{ $post->title }}</td>
            <td>{{ substr($post->body, 0, 40) }}{{ strlen($post->body) > 40 ? "..." : "" }}</td>
            <td><a href="{{ route('posts.show', ['post' => $post->id]) }}" class="btn btn-default">Bekijk</a>
                <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-default">Bewerk</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <div class="text-center">
      {!! $posts->links(); !!}
    </div>
  </div>
</div>

@stop
