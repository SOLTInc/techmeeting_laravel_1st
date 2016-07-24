<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // ソフロデリート用のnamespace

class PostModel extends Model
{
  // ソフトデリート用のトレイト
  use SoftDeletes;

  protected $table = 'posts';

  /**
   * Userからの挿入を許可するフィールド
   *
   * @var array
   */
  protected $fillable = [
    'title',
    'category',
    'description',
    'picture'
  ];

  /**
   * 日付へキャストするフィールド
   *
   * @var array
   */
  protected $dates = [
    'deleted_at',
    'created_at'
  ];

  /**
   * 関連するテーブルを取得するメソッドの定義
   * メソッドチェーンでの利用が可能
   */
  public function tugs()
  {
    return $this->hasMany('App\Models\PostTugModel', 'post_id', 'id');
  }

}
