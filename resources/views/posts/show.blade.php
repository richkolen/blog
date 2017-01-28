@extends('default')
@section('stylesheets')
  <link rel="stylesheet" type="text/css" href="../css/style.css">
@endsection

@section('content')

<div class="row">
  <div class="col-md-8">
    <h1>{{ $post->title }}</h1>

    <p class="lead">{{ $post->body }}</p>
  </div>

  <div class="col-md-4 sidebar-button-single">
    <div class="well">
      <div class="row">
        <div class="col-sm-6">
          <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-primary btn-block">Bewerk</a>
        </div>
        <div class="col-sm-6">
          <form class="form" action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="post">
            <input name="_method" type="hidden" value="DELETE">
            <button type="submit" name="button" class="btn btn-danger btn-block">Verwijder</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
        </div>
        <hr>
        <div class="col-sm-12">
          <a href="{{ route('posts.index') }}" class="btn btn-default btn-block">Alle berichten</a>
        </div>
      </div>
    </div>
  </div>
</div>

@stop
