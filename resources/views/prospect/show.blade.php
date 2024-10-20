@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9">
                <div class="card" style="background-color: rgb(214, 231, 255)">
                    <div class="card-header">{{ __('Loan Application Details') }}</div>

                    <div class="card-body">
                        <h5>Personal Information</h5>
                        <hr class="mb-5 mt-4">
                        <p><strong>Name                       :</strong> {{ $prospect->name }}</p>
                        <p><strong>NIC No.:</strong> {{ $prospect->nic }}</p>
                        <p><strong>Account No.:</strong> {{ $prospect->account_no }}</p>
                        <p><strong>Citizenship:</strong> {{ $prospect->citizenship }}</p>

                        <h5 class="mt-5">Contact Information</h5>
                        <hr>
                        <p><strong>Email:</strong> {{ $prospect->email }}</p>
                        <p><strong>Contact Number:</strong> {{ $prospect->contact }}</p>

                        <h5 class="mt-5">Permanent Address</h5>
                        <hr>
                        <p><strong>Address Line 1:</strong> {{ $prospect->address_line_1 }}</p>
                        <p><strong>Address Line 2:</strong> {{ $prospect->address_line_2 }}</p>
                        <p><strong>Address Line 3:</strong> {{ $prospect->address_line_3 }}</p>
                        <p><strong>Postal Code:</strong> {{ $prospect->postal_code }}</p>
                        <p><strong>District:</strong> {{ $prospect->district }}</p>
                        <p><strong>Province:</strong> {{ $prospect->province }}</p>

                        <h5 class="mt-5">Financial Information</h5>
                        <hr>
                        <p><strong>Employment Sector:</strong> {{ $prospect->employment_sector }}</p>
                        <p><strong>Profession:</strong> {{ $prospect->profession }}</p>
                        <p><strong>Employment Type:</strong> {{ $prospect->employment_type }}</p>
                        <p><strong>Gross Salary:</strong> Rs. {{ number_format($prospect->gross_salary, 2) }}</p>
                        <p><strong>Net Salary:</strong> Rs. {{ number_format($prospect->net_salary, 2) }}</p>
                        <p><strong>Other Income:</strong> Rs. {{ number_format($prospect->other_income, 2) }}</p>

                        <h5 class="mt-5">Loan Information</h5>
                        <hr>
                        <p><strong>Loan Type:</strong> {{ $prospect->loan_type }}</p>
                        <p><strong>Re-payment Method:</strong> {{ $prospect->repayment_method }}</p>
                        <p><strong>Loan Amount:</strong> Rs. {{ number_format($prospect->loan_amount, 2) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
