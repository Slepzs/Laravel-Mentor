<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //

    protected $fillable = [

        'post_id',
        'author',
        'email',
        'body',
        'is_active',
        'comment_id',
        'photo'

    ];


    public function replies() {

        return $this->hasMany('App\CommentReply');

    }

    public function post() {

        return $this->belongsTo('App\Post');

    }

}
