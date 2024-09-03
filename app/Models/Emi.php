<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nic',
        'principal',
        'interest_rate',
        'term',
        'emi_amount',
    ];
}
