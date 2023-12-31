<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    //protected $fillable =['title','body'];
    protected $guarded = []; # can add any column inside [''] for exception

     /**
     * Get the comments for the blog post.
     */
    public function comments()//: HasMany
    {
        return $this->hasMany(Comment::class);
    }

    // public function scopePopular( $query): void
    // {
    //     $query->where('votes', '>', 100);
    // }
}
