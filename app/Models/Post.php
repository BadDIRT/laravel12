<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
        // kalo nama table nya diubah menjadi blog_posts
    // protected $table = 'blog_posts';
    
    // kalo nama field id nya berubah menjadi post_id
    // protected $primaryKey = 'post_id';
    
    use HasFactory;
    protected $fillable = ['title','author','slug','body'];
}
