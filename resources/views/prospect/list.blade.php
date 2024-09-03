@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>List of All Saved Prospects</h1>
        <div class="card mt-3">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>NIC</th>
                            <th>Account No.</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>Employment Sector</th>
                            <th>Profession</th>
                            <th>Employment Type</th>
                            <th>Gross Salary</th>
                            <th>Net Salary</th>
                            <th>Other Income</th>
                            <th>Loan Type</th>
                            <th>Repayment Method</th>
                            <th>Loan Amount</th>
                            <th>Interest Rate</th>
                            <th>Repayments</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($prospects as $prospect)
                            <tr>
                                <td>{{ $prospect->name }}</td>
                                <td>{{ $prospect->nic }}</td>
                                <td>{{ $prospect->account_no }}</td>
                                <td>{{ $prospect->email }}</td>
                                <td>{{ $prospect->contact }}</td>
                                <td>{{ $prospect->address_line_1 }}, {{ $prospect->address_line_2 }},
                                    {{ $prospect->address_line_3 }}</td>
                                <td>{{ $prospect->employment_sector }}</td>
                                <td>{{ $prospect->profession }}</td>
                                <td>{{ $prospect->employment_type }}</td>
                                <td>{{ $prospect->gross_salary }}</td>
                                <td>{{ $prospect->net_salary }}</td>
                                <td>{{ $prospect->other_income }}</td>
                                <td>{{ $prospect->loan_type }}</td>
                                <td>{{ $prospect->repayment_method }}</td>
                                <td>{{ $prospect->loan_amount }}</td>
                                <td>{{ $prospect->interest_rate }}</td>
                                <td>{{ $prospect->repayments }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
