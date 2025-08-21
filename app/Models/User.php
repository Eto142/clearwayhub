<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'full_name',
        'ssn',
        'dob',
        'mailing_address',
        'physical_address',
        'filing_status',
        'dependents',
        'income_amount',
        'id_upload',
        'purpose',
        'employment_status',
        'source_income',
    ];
}
