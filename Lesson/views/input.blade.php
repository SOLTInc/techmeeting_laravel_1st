@extends('layouts.layout')

@section('contents')
  <form method="post" action="#">
    <div class="row">
      <div class="small-12 medium-12 large-12 columns">
        <label>記事タイトル
          <input type="text" name="title" placeholder="Type Title" value="">
        </label>
      </div>
      <div class="small-12 medium-12 large-12 columns">
          <label>記事カテゴリー
            <select name="category">
              <option value="旅行">旅行</option>
              <option value="仕事">仕事</option>
              <option value="恋人">恋人</option>
              <option value="その他">その他</option>
            </select>
          </label>
      </div>
      <div class="small-12 medium-12 large-12 columns">
          <label>表示写真選択
            <select name="picture">
              <option value="Garden01.jpg">写真1</option>
              <option value="Garden02.jpg">写真2</option>
              <option value="Garden03.jpg">写真3</option>
              <option value="Garden04.jpg">写真4</option>
              <option value="Garden05.jpg">写真5</option>
              <option value="Garden06.jpg">写真6</option>
              <option value="Garden07.jpg">写真7</option>
              <option value="Garden08.jpg">写真8</option>
              <option value="Garden09.jpg">写真9</option>
              <option value="Garden10.jpg">写真10</option>
              <option value="Garden11.jpg">写真11</option>
              <option value="Garden12.jpg">写真12</option>
            </select>
          </label>
      </div>
      <div class="small-12 medium-12 large-12 columns">
          <legend>タグ</legend>
          <input id="checkbox1" type="checkbox" name="tugs[]" value="タグ１"><label for="checkbox1">タグ１</label>
          <input id="checkbox2" type="checkbox" name="tugs[]" value="タグ２"><label for="checkbox2">タグ２</label>
          <input id="checkbox3" type="checkbox" name="tugs[]" value="タグ３"><label for="checkbox3">タグ３</label>
          <input id="checkbox4" type="checkbox" name="tugs[]" value="タグ４"><label for="checkbox4">タグ４</label>
          <input id="checkbox5" type="checkbox" name="tugs[]" value="タグ５"><label for="checkbox5">タグ５</label>
      </div>
      <div class="small-12 medium-12 large-12 columns">
        <label>内容
          <textarea name="description" value=""></textarea>
        </label>
      </div>
      <div class="small-12 medium-12 large-12 columns">
        <input type="submit" class="button" value="Submit">
      </div>
    </div>
  </form>
@stop
