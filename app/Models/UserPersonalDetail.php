<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPersonalDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'firstnameInput',
        'lastnameInput',
        'phonenumberInput',
        'emailInput',
        'JoiningdatInput',
        'skillsInput',
        'designationInput',
        'websiteInput1',
        'cityInput',
        'countryInput',
        'zipcodeInput',
        'description', // Updated to match the migration
    ];

    protected $casts = [
        'skillsInput' => 'array', // Cast JSON to an array
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
