<?php

// app/Http/Controllers/EMICalculatorController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EMICalculatorController extends Controller
{
    public function calculate(Request $request)
    {
        $loanAmount = $request->input('loan_amount');
        $annualInterestRate = $request->input('interest_rate');
        $tenureMonths = $request->input('tenure');

        // Calculate EMI
        $monthlyInterestRate = $annualInterestRate / (12 * 100);
        $emi = ($loanAmount * $monthlyInterestRate * pow(1 + $monthlyInterestRate, $tenureMonths)) / (pow(1 + $monthlyInterestRate, $tenureMonths) - 1);
        $emi = number_format($emi, 2);

        return view('emi-calculator', [
            'emi' => $emi,
            'loan_amount' => $loanAmount,
            'interest_rate' => $annualInterestRate,
            'tenure' => $tenureMonths,
            'nic' => $request->input('nic'),
        ]);
    }
}
