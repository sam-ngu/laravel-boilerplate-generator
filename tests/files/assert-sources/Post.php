<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'user_id', 'book_author_id', 'tags'];

    protected $casts = [

    ];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    public function book_author()
    {
        return $this->belongsTo(\App\Models\BookAuthor::class, 'book_author_id');
    }

    public function posts()
    {
        return $this->belongsToMany(\App\Models\Post::class, 'post_tag', 'tag_id', 'post_id');
    }

}