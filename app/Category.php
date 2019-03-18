<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'parent_id', 'name'
    ];

    protected $dates = ['created_at', 'updated_at'];

    public function child()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
