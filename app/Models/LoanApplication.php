<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanApplication extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'loan_applications';

    // Define the attributes that are mass assignable
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
        'loan_type',
        'repayment_method',
        'loan_amount',
    ];

    // Optionally, you can define additional methods or relationships here
}