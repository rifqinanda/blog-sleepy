<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'desc',
        'image',
        'id_category',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }
}
