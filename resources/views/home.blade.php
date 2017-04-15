@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- Error Message -->
@include('shared.errors')

<!-- create album: dialog button -->
<button type="button" class="btn btn-primary" style="margin-bottom:10px">Create album</button>

<!-- show albums -->
<div class="row">
    @include('shared.album')
    @include('shared.album')
    @include('shared.album')
    @include('shared.album')
    @include('shared.album')
    @include('shared.album')
</div>

@endsection