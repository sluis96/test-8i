<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Phone extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'customer_id', 'telefono',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
