<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emi;

class EmiController extends Controller
{



    public function emi(){
        return view('emi');
    }
    
    public function index()
    {
        return view('emi');
    }

    public function calculateEmi(Request $request)
    {
        $principal = $request->input('principal');
        $interestRate = $request->input('interest_rate') / 12 / 100;
        $term = $request->input('term') * 12;

        $emiAmount = $principal * $interestRate * pow(1 + $interestRate, $term) / (pow(1 + $interestRate, $term) - 1);
        return response()->json(['emi_amount' => $emiAmount]);
    }

    public function saveEmi(Request $request)
    {
        $emi = new Emi();
        $emi->nic = $request->input('nic');
        $emi->principal = $request->input('principal');
        $emi->interest_rate = $request->input('interest_rate');
        $emi->term = $request->input('term');
        $emi->emi_amount = $request->input('emi_amount');
        $emi->save();
        return response()->json(['success' => true]);
    }

    public function showSchedule(Request $request)
    {
        $principal = $request->input('principal');
        $interestRate = $request->input('interest_rate') / 12 / 100;
        $term = $request->input('term') * 12;

        $emiAmount = $principal * $interestRate * pow(1 + $interestRate, $term) / (pow(1 + $interestRate, $term) - 1);

        $schedule = [];
        for ($i = 1; $i <= $term; $i++) {
            $interestPayment = $principal * $interestRate;
            $principalPayment = $emiAmount - $interestPayment;
            $principal -= $principalPayment;

            $schedule[] = [
                'month' => $i,
                'emi_amount' => round($emiAmount, 2),
                'interest_payment' => round($interestPayment, 2),
                'principal_payment' => round($principalPayment, 2),
                'remaining_balance' => round($principal, 2)
            ];
        }

        return response()->json(['schedule' => $schedule]);
    }
}
