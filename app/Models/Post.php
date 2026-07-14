<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'featured_image',
        'created_at'

    ];

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime'
        ];
    }
}
