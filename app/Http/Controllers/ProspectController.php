<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prospect;
use Illuminate\Support\Facades\Session;


class ProspectController extends Controller
{
    public function step1(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'nic' => 'required|string',
            'account_no' => 'required|string',
            'citizenship' => 'required|string',
            'email' => 'required|string',
            'contact' => 'required|string',
            'address_line_1' => 'required|string',
            'address_line_2' => 'required|string',
            'address_line_3' => 'required|string',
            'district' => 'required|string',
            'address_line_3' => 'required|string',
            'province' => 'required|string',

        ]);

        Session::put('personal_info', $request->all());

        return redirect()->route('loanofficer\apply_loan_iii');
    }

    

    


    public function confirm()
    {
        $personalInfo = Session::get('personal_info');
        $financialInfo = Session::get('financial_info');
        $loanInfo = Session::get('loan_info');

        $prospect = Prospect::create(array_merge($personalInfo, $financialInfo, $loanInfo));

        Session::forget(['personal_info', 'financial_info', 'loan_info']);

        return redirect()->route('loanofficer/loanofficer_dashboard')->with('status', 'Loan application successfully submitted!');
    }
}
