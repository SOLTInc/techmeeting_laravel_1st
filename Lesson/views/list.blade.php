@extends('layouts.layout')

@section('contents')
<br>
<div class="row">
    <div class="medium-12 large-6 columns">
        <h1>Laravel Hands on!</br><small>〜The First Time〜</small></h1>
        <p class="subheader">Laravelハンズオンセミナー用サンプルプログラムです。お持ち帰り可能です。<br>
          <small class="text-color-red">※インターネットに繋がった環境でない場合、当CSSフレームワークのリソースを読み込めません、レイアウト崩れが発生します。</small>
        </p>
    </div>
    <div class="show-for-large large-6 columns text-right">
        <img src="{{ Asset('assets/img/bland.jpg') }}" alt="picture of space">
    </div>
</div>

<div class="row column">
    <hr>
</div>

<div class="row column">
    <p class="lead">投稿記事一覧</p>
    <a href="#">
      <button class="hollow button">新規登録画面へ</button>
    </a>
</div>

<div id="list-item" class="row small-up-1 medium-up-3 large-up-3">
    <div class="column">
        <a href="#">
          <div class="callout clearfix">
              <img src="{{ Asset('assets/img/Garden01.jpg) }}" alt="picture of space">
              <p class="lead">投稿タイトル</p>
              <p class="subheader">ディスクリプション</p>
              <a href="#">
                <button class="alert hollow button float-right">削除</button>
              </a>
          </div>
        </a>
    </div>
    <div class="column">
        <a href="#">
          <div class="callout clearfix">
              <img src="{{ Asset('assets/img/Garden01.jpg) }}" alt="picture of space">
              <p class="lead">投稿タイトル</p>
              <p class="subheader">ディスクリプション</p>
              <a href="#">
                <button class="alert hollow button float-right">削除</button>
              </a>
          </div>
        </a>
    </div>
</div>
@stop
