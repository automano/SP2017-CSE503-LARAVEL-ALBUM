@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- Error Message -->
@include('shared.errors')

<!-- create album: dialog button -->
<button type="button" class="btn btn-primary" style="margin-bottom:10px" data-toggle="modal" data-target="#createAlbum">Create Album</button>

<!-- create album: dialog -->
<div class="modal fade" id="createAlbum" tabindex="-1" role="dialog" aria-labelledby="myCreateModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myCreateModalLabel">Create Album</h4>
      </div>
      <div class="modal-body">
          <form class="form-horizontal" action="{{ route('albums.store') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
            <!-- pass current user id to create album form -->
              <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
              <label for="name" class="col-sm-2 control-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
            </div>
            <div class="form-group">
              <label for="intro" class="col-sm-2 control-label">Description</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="intro" name="intro">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Create</button>
              </div>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>


<!-- show albums -->
<div class="row">
    @foreach ($albums as $album)
    <!-- only show current user's album-->
        @if($album->user_id == Auth::user()->id)
            @include('shared.album', $album)
        @endif
    @endforeach
</div>

@endsection