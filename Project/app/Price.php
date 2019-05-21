<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
        'price_id',
        'price',
        'currency',
        'start_date',
        'end_date',
    ];
}