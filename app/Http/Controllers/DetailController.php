<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\PostModel; // モデルを使用する

class DetailController extends Controller
{
    // 詳細画面用メソッド
    public function index($id){
      // 投稿データの取得、見つからない場合は例外をthrow(404と等価)
      $post = PostModel::findOrFail($id);

      // 投稿に関連するタグを取得
      $tugs = PostModel::find($id)->tugs()->get();

      // ページ名称をViewへ渡す
      $view_name = $post->title;

      return view('detail', compact('post', 'tugs', 'pagename', 'view_name'));
    }
}
