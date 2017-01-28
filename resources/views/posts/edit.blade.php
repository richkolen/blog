@extends('default')

@section('content')

<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <h1>Bewerk Bericht</h1>
    <hr>

    <form class="form" action="{{ route('posts.update', ['post' => $post->id]) }}" method="post">
      <input name="_method" type="hidden" value="PUT">
      <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
        <label for="title" class="control-label" id="title">Titel</label>
        <input type="text" name="title" class="form-control input-lg" id="title" value="{{ $post->title, ['post' => $post->id] }}">
        @if ($errors->has('title'))
					<span class="help-block">{{ $errors->first('title') }}</span>
				@endif
      </div>

      <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
        <label for="body" class="control-label" id="body">Bericht</label>
        <textarea name="body" rows="8" cols="80" class="form-control">{{ $post->body, ['post' => $post->id] }}</textarea>
        @if ($errors->has('body'))
					<span class="help-block">{{ $errors->first('body') }}</span>
				@endif
      </div>

      <div class="col-sm-6">
        <button type="submit" name="button" class="btn btn-success btn-lg btn-block">Update bericht</button>
      </div>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
    </form>
    <div class="col-sm-6">
      <a href="{{ route('posts.show', ['post' => $post->id]) }}"class="btn btn-danger btn-lg btn-block">Annuleer</a>
    </div>
  </div>
</div>

@stop
