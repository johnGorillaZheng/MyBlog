<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = ['title','body','user_id','topic_id'];

    public function User() {
        return $this->belongsTo(User::class);
    }

    public function Comment() {
        return $this->hasMany(Comment::class);
    }

    public function Topic() {
        return $this->hasOne(Topic::class);
    }
}
