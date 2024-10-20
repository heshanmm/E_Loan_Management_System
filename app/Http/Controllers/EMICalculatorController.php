<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emi;

class EmiCalculatorController extends Controller
{
    public function index()
    {
        return view('emi_calculator');
    }

    public function calculateEmi(Request $request)
    {
        $request->validate([
            'nic' => 'required|string',
            'loan_amount' => 'required|numeric',
            'interest_rate' => 'required|numeric',
            'repayments' => 'required|numeric',
        ]);

        $loanAmount = $request->input('loan_amount');
        $interestRate = $request->input('interest_rate') / 100 / 12;
        $repayments = $request->input('repayments') * 12;

        $emi = $this->calculate($loanAmount, $interestRate, $repayments);
        $repaymentSchedule = $this->generateRepaymentSchedule($loanAmount, $interestRate, $repayments, $emi);

        return view('emi_calculator', [
            'nic' => $request->input('nic'),
            'loanAmount' => $loanAmount,
            'interestRate' => $request->input('interest_rate'),
            'repayments' => $request->input('repayments'),
            'emi' => $emi,
            'repaymentSchedule' => $repaymentSchedule,
        ]);
    }

    private function calculate($loanAmount, $interestRate, $repayments)
    {
        if ($interestRate === 0) {
            return $loanAmount / $repayments; 
        }

        $emi = $loanAmount * $interestRate * pow(1 + $interestRate, $repayments) / (pow(1 + $interestRate, $repayments) - 1);
        return round($emi, 2);
    }

    private function generateRepaymentSchedule($loanAmount, $interestRate, $repayments, $emi)
    {
        $repaymentSchedule = [];
        $outstandingBalance = $loanAmount;

        for ($i = 1; $i <= $repayments; $i++) {
            $interest = $outstandingBalance * $interestRate;
            $principal = $emi - $interest;
            $outstandingBalance -= $principal;

            $repaymentSchedule[] = [
                'month' => $i,
                'emi' => $emi,
                'interest' => round($interest,2),
                'principal' => round($principal,2),
                'outstanding_balance' => round($outstandingBalance,2),
            ];
        }

        return $repaymentSchedule;
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nic' => 'required|string|max:255',
            'principal' => 'required|numeric|min:0',
            'interest_rate' => 'required|numeric|min:0',
            'term' => 'required|integer|min:1',
            'emi_amount' => 'required|numeric|min:0',
        ]);

        $emi = new Emi();
        $emi->fill([
            'nic' => $validatedData['nic'],
            'principal' => $validatedData['principal'],
            'interest_rate' => $validatedData['interest_rate'],
            'term' => $validatedData['term'],
            'emi_amount' => $validatedData['emi_amount'],
        ]);

        $emi->save();

        return redirect()->route('emi_calculator')->with('success', 'EMI record created successfully!');
    }
}
