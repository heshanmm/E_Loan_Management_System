<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\LoanApplication;


class LoanofficerController extends Controller
{
    public function loanofficer_form()
    {
        return view('admin.loanofficer_form');
    }

    public function loanofficerdashboard()
    {
        return view('loanofficer.loanofficer_dashboard');
    }

    public function loanofficer_dashboard()
    {
        return view('loanofficer/loanofficer_dashboard');
    }


    public function manager_list()
    {
        $users = User::where('usertype', 'loanofficer')->paginate(8);
        return view('admin.loanofficer_list', compact('users')); 
    }




    public function loanofficer_view()
    {
        return view('admin.loanofficer_view');
    }

    public function loanofficer_edit($email)
    {
        $user = User::where('email', $email)->firstOrFail();
        return view('admin.manager_edit', compact('user'));
    }

    public function loanofficer_update(string $email, Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $email],
        ]);

        $loanofficer = User::where('email', $email)->firstOrFail();
        $loanofficer->update($validatedData);

        return redirect()->route('loanofficer_list')->with('success', 'Loan officer updated successfully');
    }

    public function loanofficer_delete($email)
    {
        $user = User::where('email', $email)->firstOrFail();
        $user->delete();

        return redirect()->route('loanofficer_list')->with('success', 'User deleted successfully');
    }

    public function emi_calculator()
    {
        return view('loanofficer.emi_calculator');
    }

    public function apply_loan()
    {
        return view('loanofficer\apply_loan');
    }

    public function apply_loan_ii()
    {
        return view('loanofficer\apply_loan_ii');
    }

    public function applyLoanII(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'nic' => 'required|string|max:20',
            'account_no' => 'required|string|max:20',
            'citizenship' => 'required|string',
            'email' => 'required|email',
            'contact' => 'required|string|max:15',
            'address_line_1' => 'required|string|max:255',
            'address_line_2' => 'required|string|max:255',
            'address_line_3' => 'required|string|max:255',
            'postal_code' => 'required|numeric',
            'district' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'employment_sector' => 'required|string',
            'profession' => 'required|string',
            'employment_type' => 'required|string',
            'gross_salary' => 'required|numeric',
            'net_salary' => 'required|numeric',
            'other_income' => 'required|numeric',
            'loan_type' => 'required|string',
            'repayment_method' => 'required|string',
            'loan_amount' => 'required|numeric',
        ]);

        $loanApplication = LoanApplication::create($validatedData);

        return view('loanofficer.success', [
            'loanApplication' => $loanApplication,
            'message' => 'Loan Application submitted successfully!'
        ]);
        
    }

    
}
