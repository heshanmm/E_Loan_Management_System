<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'title',
        'name',
        'nic',
        'gender',
        'dob',
        'citizenship',
        'civil_status',
        'email',
        'contact',
        'address_line_1',
        'address_line_2',
        'address_line_3',
        'postal_code',
        'district',
        'province',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'dob' => 'date',
    ];
}
