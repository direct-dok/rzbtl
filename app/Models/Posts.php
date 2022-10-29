<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $table = 'posts';

    public function category()
    {
        return $this->belongsTo(Categories::class, 'id');
    }

    public function getDate()
    {
        return date('Y-m-d', strtotime($this->create_date));
    }
}
