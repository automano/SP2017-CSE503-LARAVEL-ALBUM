<div class="col-md-3 col-sm-4 col-xs-6 album">
    <a href="{{ route('albums.show', $album->id) }}">
        <div class="panel panel-default">
          <div class="panel-body">
            @if( $album->cover == '' )
                <img class="img-responsive" src="/img/album/covers/default.jpg">
            @else
                <img class="img-responsive" src="{{ $album->cover }}">
            @endif
            <p class="album-name">{{ $album->name }}</p>
            @if( $album->intro == '' )
                <p class="album-intro">no introduction..</p>
            @else
                <p class="album-intro">{{ $album->intro }}</p>
            @endif
          </div>
        </div>
    </a>
</div>