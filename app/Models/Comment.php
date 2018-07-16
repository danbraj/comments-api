<?php

namespace CommentsApi\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = [
        'site_id',
        'content',
        'author',
        'email'
    ];
}
