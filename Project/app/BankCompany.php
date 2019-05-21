<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankCompany extends Model
{
    protected $fillable = [
        'bank_company_id',
        'name',
    ];
}
