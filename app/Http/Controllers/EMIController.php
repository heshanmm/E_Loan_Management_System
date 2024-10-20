<?php

namespace App\Http\Controllers;

use App\Models\EMI;
use Illuminate\Http\Request;

class EMIController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nic' => 'required|string|max:255',
            'principal' => 'required|numeric|min:0',
            'interest_rate' => 'required|numeric|min:0',
            'term' => 'required|integer|min:1',
            'emi_amount' => 'required|numeric|min:0',
        ]);

        EMI::create([
            'nic' => $request->nic,
            'principal' => $request->principal,
            'interest_rate' => $request->interest_rate,
            'term' => $request->term,
            'emi_amount' => $request->emi_amount,
        ]);

        return redirect()->back()->with('success', 'EMI details saved successfully!');
    }
}

