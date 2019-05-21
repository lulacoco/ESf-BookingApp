<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable = [
        'agent_id',
        'name',
        'age',
        'email',
        'bank_account',
        'city',
    ];

    protected $guarded = [
        'password',
    ];
}
