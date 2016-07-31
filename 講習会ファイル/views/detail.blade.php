@extends('layouts.layout')

@section('contents')

<div class="row">
  <div class="small-12 medium-6 large-6 columns">
    <img src="{{ Asset('assets/img/Garden01.jpg') }}" alt="picture of space">
  </div>

  <div class="small-12 medium-6 large-6 columns">
    <h2>投稿タイトル</h2>
    <p>2016.7.31</p>
    <ul class="menu categoriyes">
      <li>投稿カテゴリー</li>
    </ul>
    <ul class="menu categoriyes">
      <li><button class="secondary hollow button">タグ1</button></li>
      <li><button class="secondary hollow button">タグ2</button></li>
      <li><button class="secondary hollow button">タグ3</button></li>
    </ul>
  </div>

  <div class="small-12 medium-12 large-12 columns desciption">
    <p>ディスクリプション</p>
  </div>

  <div class="small-12 medium-12 large-12 columns desciption">
    <a href="#">
      <button class="alert hollow button">この記事を削除する</button>
    </a>
  </div>

</div>

@stop
