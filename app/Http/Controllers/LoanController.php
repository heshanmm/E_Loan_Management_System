<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prospect;
use App\Models\LoanApplication;

class LoanController extends Controller
{
    public function apply_loan_ii(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nic' => 'required|string|max:20',
            'account_no' => 'required|string|max:20',
            'citizenship' => 'required|string',
            'email' => 'required|email',
            'contact' => 'required|string|max:15',
            'address_line_1' => 'required|string|max:255',
            'address_line_2' => 'required|string|max:255',
            'address_line_3' => 'required|string|max:255',
            'postal_code' => 'required|integer',
            'district' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'employment_sector' => 'required|string',
            'profession' => 'required|string',
            'employment_type' => 'required|string',
            'gross_salary' => 'required|numeric',
            'net_salary' => 'required|numeric',
            'other_income' => 'nullable|numeric',
            'loan_amount' => 'required|numeric',
            'loan_type' => 'required|string',
            'repayment_method' => 'required|string',
        ]);

        $prospect = Prospect::create($request->all());

        return redirect()->route('loan.show', ['id' => $prospect->id]);
    }

    public function loan_list()
    {
        $loanApplications = LoanApplication::paginate(10);
        return view('manager/loan_list', ['loanApplications' => $loanApplications]);
    }


    public function show($id)
    {
        $loanApplication = LoanApplication::findOrFail($id);
        return view('manager/show', compact('loanApplication'));
    }
}
