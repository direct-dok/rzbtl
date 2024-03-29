<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = ['title', 'preview', 'content', 'image', 'description', 'keywords', 'url', 'category_id', 'create_date', 'edit_date', 'seo_title'];

    public function category()
    {
        return $this->belongsTo(Categories::class, 'id');
    }

    public function getDate()
    {
        return date('Y-m-d', strtotime($this->create_date));
    }

    public function comments()
    {
        return $this->hasMany(Comments::class, 'post_id')->orderByDesc('created_at');
    }
}
