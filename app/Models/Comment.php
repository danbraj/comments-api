<?php

namespace CommentsApi\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    protected $table = 'comments';

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'content',
        'author',
        'email'
    ];

    protected $hidden = [
        'site_id'
    ];

    public function site()
    {
        return $this->belongsToMany(Site::class);
    }
}
