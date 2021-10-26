<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nombre', 'descripcion', 'precio', 'stock',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
