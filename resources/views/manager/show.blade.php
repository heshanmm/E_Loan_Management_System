@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="title-container">
            <h2><b>Loan Appraisal</b></h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home </a></li>
                    <li class="breadcrumb-item"><a href="">Loan Appraisal / </a></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="customer-form container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="accordion" id="loanApplicationAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="personalInfoHeading">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#personalInfo" aria-expanded="true" aria-controls="personalInfo">
                                Personal Information
                            </button>
                        </h2>
                        <div id="personalInfo" class="accordion-collapse collapse show"
                            aria-labelledby="personalInfoHeading" data-bs-parent="#loanApplicationAccordion">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name"
                                            value="{{ $loanApplication->name }}" readonly>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="nic" class="form-label">NIC</label>
                                        <input type="text" class="form-control" id="nic"
                                            value="{{ $loanApplication->nic }}" readonly>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="account_no" class="form-label">Account No.</label>
                                        <input type="text" class="form-control" id="account_no"
                                            value="{{ $loanApplication->account_no }}" readonly>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="citizenship" class="form-label">Citizenship</label>
                                        <input type="text" class="form-control" id="citizenship"
                                            value="{{ $loanApplication->citizenship }}" readonly>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email"
                                            value="{{ $loanApplication->email }}" readonly>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="contact" class="form-label">Contact</label>
                                        <input type="text" class="form-control" id="contact"
                                            value="{{ $loanApplication->contact }}" readonly>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="address"
                                            value="{{ $loanApplication->address_line_1 }}, {{ $loanApplication->address_line_2 }}, {{ $loanApplication->address_line_3 }}"
                                            readonly>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="postal_code" class="form-label">Postal Code</label>
                                        <input type="text" class="form-control" id="postal_code"
                                            value="{{ $loanApplication->postal_code }}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="employmentInfoHeading">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#employmentInfo" aria-expanded="false" aria-controls="employmentInfo">
                                Employment Information
                            </button>
                        </h2>
                        <div id="employmentInfo" class="accordion-collapse collapse" aria-labelledby="employmentInfoHeading"
                            data-bs-parent="#loanApplicationAccordion">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="employment_sector" class="form-label">Employment Sector</label>
                                        <input type="text" class="form-control" id="employment_sector"
                                            value="{{ $loanApplication->employment_sector }}" readonly>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="profession" class="form-label">Profession</label>
                                        <input type="text" class="form-control" id="profession"
                                            value="{{ $loanApplication->profession }}" readonly>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="employment_type" class="form-label">Employment Type</label>
                                        <input type="text" class="form-control" id="employment_type"
                                            value="{{ $loanApplication->employment_type }}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="financialInfoHeading">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#financialInfo" aria-expanded="false" aria-controls="financialInfo">
                                Loan Information
                            </button>
                        </h2>
                        <div id="financialInfo" class="accordion-collapse collapse"
                            aria-labelledby="financialInfoHeading" data-bs-parent="#loanApplicationAccordion">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="gross_salary" class="form-label">Gross Salary</label>
                                        <input type="text" class="form-control" id="gross_salary"
                                            value="Rs. {{ number_format($loanApplication->gross_salary, 2) }}" readonly>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="net_salary" class="form-label">Net Salary</label>
                                        <input type="text" class="form-control" id="net_salary"
                                            value="Rs. {{ number_format($loanApplication->net_salary, 2) }}" readonly>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="other_income" class="form-label">Other Income</label>
                                        <input type="text" class="form-control" id="other_income"
                                            value="Rs. {{ number_format($loanApplication->other_income, 2) }}" readonly>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="loan_amount" class="form-label">Loan Amount</label>
                                        <input type="text" class="form-control" id="loan_amount"
                                            value="Rs. {{ number_format($loanApplication->loan_amount, 2) }}" readonly>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="loan_type" class="form-label">Loan Type</label>
                                        <input type="text" class="form-control" id="loan_type"
                                            value="{{ $loanApplication->loan_type }}" readonly>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="repayment_method" class="form-label">Repayment Method</label>
                                        <input type="text" class="form-control" id="repayment_method"
                                            value="{{ $loanApplication->repayment_method }}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @Auth
                            @if (Auth::user()->usertype === 'manager')
                                <div class="mt-4 text-center">
                                    <a href="#" class="btn btn-outline-success"
                                        onclick="showPopup('accepted')">Confirm</a>
                                    <a href="#" class="btn btn-outline-danger"
                                        onclick="showPopup('rejected')">Reject</a>
                                </div>

                                <!-- Popup for messages -->
                                <div class="overlay" id="popupOverlay"></div>
                                <div class="popup" id="popupMessage">
                                    <div class="popup-icon" id="popupIcon">
                                        <i class="fa fa-check-circle"></i>
                                    </div>
                                    <div class="popup-content" id="popupContent"></div>
                                    <a href="{{ route('home') }}" onclick="closePopup()" class="btn btn-danger">Close</a>
                                </div>

                                <script>
                                    function showPopup(status) {
                                        const popupContent = document.getElementById('popupContent');
                                        const popupIcon = document.getElementById('popupIcon');

                                        if (status === 'accepted') {
                                            popupContent.innerText = 'Loan application accepted!';
                                            popupIcon.innerHTML = '<i class="fa fa-check-circle" style="color: #28a745;"></i>';
                                        } else if (status === 'rejected') {
                                            popupContent.innerText = 'Loan application rejected.';
                                            popupIcon.innerHTML = '<i class="fa fa-times-circle" style="color: #dc3545;"></i>';
                                        }

                                        document.getElementById('popupMessage').style.display = 'block';
                                        document.getElementById('popupOverlay').style.display = 'block';
                                    }

                                    function closePopup() {
                                        document.getElementById('popupMessage').style.display = 'none';
                                        document.getElementById('popupOverlay').style.display = 'none';
                                    }
                                </script>
                            @elseif (Auth::user()->usertype === 'loanofficer')
                                <div class="mt-4 text-center">
                                    <a href="{{ route('home') }}" class="btn btn-outline-danger">Close</a>
                                </div>
                            @endif
                        @endAuth
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
