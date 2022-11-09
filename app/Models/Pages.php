<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $table = 'pages';
    protected $fillable = ['title', 'content', 'description', 'keywords', 'url', 'seo_title'];
}
