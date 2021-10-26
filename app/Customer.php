<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nombres', 'apellidos', 'nroDocumento',
    ];

    public function phone()
    {
        return $this->hasOne(Phone::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
