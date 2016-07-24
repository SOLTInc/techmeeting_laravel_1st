<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostTugModel extends Model
{

    protected $table = 'post_tugs';

    /**
     * Userからの挿入を許可するフィールド
     *
     * @var array
     */
    protected $fillable = [
      'post_id',
      'tug_name',
    ];

    /**
     * 日付へキャストするフィールド
     *
     * @var array
     */
    protected $dates = [
      'created_at'
    ];
}
