<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
        // kalo nama table nya diubah menjadi blog_posts
    // protected $table = 'blog_posts';
    
    // kalo nama field id nya berubah menjadi post_id
    // protected $primaryKey = 'post_id';
    
    use HasFactory;
    protected $fillable = ['title','author','slug','body'];

    public function author(): BelongsTo 
    {
        return $this->belongsTo(User::class);
    }


    public function category(): BelongsTo 
    {
        return $this->belongsTo(Category::class);
    }
}
