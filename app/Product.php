<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ["name", 'price', "description", "photo", 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
