@extends('default')

@section('content')

<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <h1>Nieuw Bericht</h1>
    <hr>

    <form class="form" action="{{ route('posts.store') }}" method="post">

      <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
        <label for="title" class="control-label" id="title">Titel</label>
        <input type="text" name="title" class="form-control" id="title" value="">
        @if ($errors->has('title'))
					<span class="help-block">{{ $errors->first('title') }}</span>
				@endif
      </div>

      <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
        <label for="body" class="control-label" id="body">Bericht</label>
        <textarea name="body" rows="8" cols="80" class="form-control"></textarea>
        @if ($errors->has('body'))
					<span class="help-block">{{ $errors->first('body') }}</span>
				@endif
      </div>

      <button type="submit" name="button" class="btn btn-success btn-lg btn-block">Plaats bericht</button>
      <input type="hidden" name="_token" value="{{ Session::token() }}">

    </form>
  </div>
</div>

@stop
