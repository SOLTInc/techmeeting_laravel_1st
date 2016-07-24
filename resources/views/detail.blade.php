@extends('layouts.layout')

@section('contents')

<div class="row">
  <div class="small-12 medium-6 large-6 columns">
    <img src="{{ Asset('assets/img/'.$post->picture) }}" alt="picture of space">
  </div>

  <div class="small-12 medium-6 large-6 columns">
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->created_at }}</p>
    <ul class="menu categoriyes">
      <li>{{ $post->category }}</li>
    </ul>
    <ul class="menu categoriyes">
      @foreach($tugs as $tug)
        <li><button class="secondary hollow button">{{ $tug->tug_name }}</button></li>
      @endforeach
    </ul>

  </div>

  <div class="small-12 medium-12 large-12 columns desciption">
    <p>{{ $post->description }}</p>
  </div>

  <div class="small-12 medium-12 large-12 columns desciption">
    <a href="{{ Url('delete/'.$post->id) }}">
      <button class="alert hollow button">この記事を削除する</button>
    </a>
  </div>

</div>

@stop
