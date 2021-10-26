<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nombre', 'descripcion',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
