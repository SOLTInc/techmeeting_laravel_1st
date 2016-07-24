<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\PostModel; // モデルを使用する

class ListController extends Controller
{
    // リスト表示用のメソッド
    public function index(){
      // 投稿データの取得
      $posts = PostModel::all();
      return view('list', compact('posts'));
    }

    public function delete($id){
      // 投稿をIDで検索し、論理削除する
      $post = PostModel::find($id)->delete();
      // 一覧画面へリダイレクト
      return redirect('/');
    }
}
