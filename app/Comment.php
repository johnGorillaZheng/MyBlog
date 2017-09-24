<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['user_id','article_id','body'];

    public function User() {
        return $this->belongsTo(User::class);
    }

    public function Article() {
        return $this->belongsTo(Article::class);
    }

}
