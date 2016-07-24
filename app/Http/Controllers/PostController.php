<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\PostModel; // モデルを使用する
use App\Models\PostTugModel; // モデルを使用する

class PostController extends Controller
{
    // 入力フォーム表示メソッド
    public function index(){
      $view_name = '記事投稿';
      return view('input',compact('view_name'));
    }

    // 入力値のポスト用メソッド
    public function post(Request $inputs){
      // PostModelへのINSERT
      $post = PostModel::create([
        'title' => $inputs['title'],
        'category' => $inputs['category'],
        'description' => $inputs['description'],
        'picture' => $inputs['picture'],
      ]);
      // PostTugModelへのINSERT
      $id = $post->id;
      foreach ($inputs['tugs'] as $key => $value) {
        PostTugModel::create([
          'post_id' => $id,
          'tug_name' => $value,
        ]);
      }
      // 一覧画面へリダイレクト
      return redirect('/');
    }

}
