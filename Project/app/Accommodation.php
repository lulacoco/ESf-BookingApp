<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{
    protected $fillable = [
        'accommodation_id',
        'name',
        'country',
        'city',
        'address',
        'rating',
    ];
}