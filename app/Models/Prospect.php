<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nic',
        'account_no',
        'citizenship',
        'email',
        'contact',
        'address_line_1',
        'address_line_2',
        'address_line_3',
        'postal_code',
        'district',
        'province',
        'employment_sector',
        'profession',
        'employment_type',
        'gross_salary',
        'net_salary',
        'other_income',
        'loan_amount',
        'loan_type',
        'repayment_method',
    ];
}