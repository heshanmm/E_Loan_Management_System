@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="title-container">
            <h2><b>EMI Calculator</b></h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home </a></li>
                    <li class="breadcrumb-item"><a href="#">EMI Calculator / </a></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="customer-form container">
        <div class="row mt-3 justify-content-center">
            <div class="card col-6 mt-5" style="background-color: rgb(206, 228, 255); padding-left:4rem">
                
                <form method="POST" action="{{ route('emi.calculate') }}" id="emi-form">
                    @csrf
                    <h4 class="mt-3">EMI Calculator</h4>

                    <div class="form-group mt-4">
                        <div class="row">
                            <div class="col-4 mt-2">
                                <label for="nic">NIC No.</label>
                            </div>
                            <div class="col-7">
                                <input type="text" class="form-control" id="nic" name="nic"
                                    value="{{ old('nic', $nic ?? '') }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-4">
                        <div class="row">
                            <div class="col-4 mt-2">
                                <label for="loan_amount">Loan Amount</label>
                            </div>
                            <div class="col-7">
                                <div class="input-group">
                                    <span class="input-group-text">Rs.</span>
                                    <input type="number" class="form-control" id="loan_amount" name="loan_amount"
                                        value="{{ old('loan_amount', $loanAmount ?? '') }}" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-4">
                        <div class="row">
                            <div class="col-4">
                                <label for="interest_rate">Interest Rate</label>
                            </div>
                            <div class="col-7">
                                <div class="input-group">
                                    <input type="number" step="0.01" class="form-control" id="interest_rate"
                                        name="interest_rate" value="{{ old('interest_rate', $interestRate ?? '') }}"
                                        required>
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <div class="row">
                            <div class="col-4 mt-2">
                                <label for="repayments">Repayments</label>
                            </div>
                            <div class="col-7">
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" id="repayments" name="repayments"
                                        value="{{ old('repayments', $repayments ?? '') }}" required>
                                    <span class="input-group-text">Years</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-5 mt-3 mx-5">
                            <button type="submit" class="btn btn-primary">Calculate EMI</button>
                        </div>
                        <div class="col-2 mt-3 d-flex">
                            <a href="{{ url('emi_calculator') }}" class="btn btn-danger">Clear</a>
                        </div>
                        {{-- <div class="col-3 mt-3 d-flex justify-content-center">
                            @if (isset($emi))
                                <form method="POST" action="{{ route('emi.store') }}">
                                    @csrf
                                    <input type="hidden" name="nic" value="{{ old('nic', $nic ?? '') }}">
                                    <input type="hidden" name="principal"
                                        value="{{ old('loan_amount', $loanAmount ?? '') }}">
                                    <input type="hidden" name="interest_rate"
                                        value="{{ old('interest_rate', $interestRate ?? '') }}">
                                    <input type="hidden" name="term"
                                        value="{{ old('repayments', $repayments ?? '') }}">
                                    <input type="hidden" name="emi_amount" value="{{ $emi }}">
                                </form>
                            @endif
                        </div> --}}
                    </div>

                    @if (isset($emi))
                        <div class="form-group mt-3" id="emi-section">
                            <div class="row">
                                <div class="col-4 mt-2">
                                    <label for="emi_amount">EMI Amount</label>
                                </div>
                                <div class="col-7">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Rs.</span>
                                        <input type="number" class="form-control" id="emi_amount" name="emi_amount"
                                            value="{{ $emi }}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </form>
            </div>
        </div>

        @if (isset($emi))
            <div class="card mt-5" style="padding: 3rem; background-color: rgb(206, 228, 255);" id="schedule-section">
                <h2>Repayment Schedule</h2>
                <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th>Month</th>
                            <th>Monthly Installment</th>
                            <th>Interest</th>
                            <th>Principal</th>
                            <th>Outstanding Balance</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($repaymentSchedule as $schedule)
                            <tr>
                                <td>{{ $schedule['month'] }}</td>
                                <td>{{ $schedule['emi'] }}</td>
                                <td>{{ $schedule['interest'] }}</td>
                                <td>{{ $schedule['principal'] }}</td>
                                <td>{{ $schedule['outstanding_balance'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>

    <script>
        function clearForm() {
            const form = document.getElementById('emi-form');
            form.reset();

            document.getElementById('emi-section').style.display = 'none';
            document.getElementById('schedule-section').style.display = 'none';
        }

        window.onload = function() {
            @if (!isset($emi))
                document.getElementById('emi-section').style.display = 'none';
                document.getElementById('schedule-section').style.display = 'none';
            @endif
        }
    </script>

@endsection
