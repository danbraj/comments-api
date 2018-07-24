<?php

namespace CommentsApi\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $table = 'sites';

    protected $fillable = [
        'title',
        'token'
    ];

    protected $hidden = [
        'token'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
