<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'client_id',
        'name',
        'surname',
        'age',
        'email',
        'card_number',
        'city',
    ];

    protected $guarded = [
        'password',
    ];
}