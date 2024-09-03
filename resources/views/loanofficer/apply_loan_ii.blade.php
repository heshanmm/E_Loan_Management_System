@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9">
                <div class="card" style="background-color: rgb(214, 231, 255)">
                    <div class="card-header">{{ __('Apply for a loan') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('loanofficer.apply_loan_ii') }}">
                            @csrf
                            <h5>Personal Information</h5>
                            <hr class="mb-5 mt-4">

                            <!-- Personal Information Section -->
                            <div class="row mb-4 mt-5">
                                <div class="col">
                                    <label for="name" class="col col-form-label">{{ __('Name With Initials') }}</label>
                                </div>
                                <div class="col-10">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4 mt-5">
                                <div class="col-5">
                                    <label for="nic" class="col-md-4 col-form-label">{{ __('NIC No.') }}</label>
                                    <div class="col">
                                        <input id="nic" type="text"
                                            class="form-control @error('nic') is-invalid @enderror" name="nic"
                                            value="{{ old('nic') }}" required autocomplete="nic" autofocus>
                                        @error('nic')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-5">
                                    <label for="account_no" class="col-md-4 col-form-label">{{ __('Account No.') }}</label>
                                    <div class="col">
                                        <input id="account_no" type="text"
                                            class="form-control @error('account_no') is-invalid @enderror" name="account_no"
                                            value="{{ old('account_no') }}" required autocomplete="account_no" autofocus>
                                        @error('account_no')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4 mt-5">
                                <div class="col-6">
                                    <div class="row">
                                        <label for="citizenship"
                                            class="col-md-4 col-form-label">{{ __('Citizenship') }}</label>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="citizenship"
                                                    id="srilankan" value="srilankan">
                                                <label class="form-check-label" for="srilankan">Sri Lankan</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="citizenship"
                                                    id="other" value="other">
                                                <label class="form-check-label" for="other">Other</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6"></div>
                            </div>

                            <h5 class="mt-5">Contact Information</h5>
                            <hr>

                            <!-- Contact Information Section -->
                            <div class="row mb-4">
                                <div class="col-6">
                                    <label for="email" class="col-md-4 col-form-label">{{ __('E-mail') }}</label>
                                    <div class="col">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <label for="contact"
                                        class="col-md-4 col-form-label">{{ __('Contact Number') }}</label>
                                    <div class="col">
                                        <input id="contact" type="text"
                                            class="form-control @error('contact') is-invalid @enderror" name="contact"
                                            value="{{ old('contact') }}" required autocomplete="contact" autofocus>
                                        @error('contact')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <h5 class="mt-5">Permanent Address</h5>
                            <hr>

                            <!-- Permanent Address Section -->
                            <div class="row mb-4">
                                <div class="col-4">
                                    <label for="address_line_1"
                                        class="col-md-4 col-form-label">{{ __('Address Line 1') }}</label>
                                    <div class="col">
                                        <input id="address_line_1" type="text"
                                            class="form-control @error('address_line_1') is-invalid @enderror"
                                            name="address_line_1" value="{{ old('address_line_1') }}" required
                                            autocomplete="address_line_1" autofocus>
                                        @error('address_line_1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-4">
                                    <label for="address_line_2"
                                        class="col-md-4 col-form-label">{{ __('Address Line 2') }}</label>
                                    <div class="col">
                                        <input id="address_line_2" type="text"
                                            class="form-control @error('address_line_2') is-invalid @enderror"
                                            name="address_line_2" value="{{ old('address_line_2') }}" required
                                            autocomplete="address_line_2" autofocus>
                                        @error('address_line_2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-4">
                                    <label for="address_line_3"
                                        class="col-md-4 col-form-label">{{ __('Address Line 3') }}</label>
                                    <div class="col">
                                        <input id="address_line_3" type="text"
                                            class="form-control @error('address_line_3') is-invalid @enderror"
                                            name="address_line_3" value="{{ old('address_line_3') }}" required
                                            autocomplete="address_line_3" autofocus>
                                        @error('address_line_3')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-4">
                                    <label for="postal_code"
                                        class="col-md-4 col-form-label">{{ __('Postal Code') }}</label>
                                    <div class="col">
                                        <input id="postal_code" type="number"
                                            class="form-control @error('postal_code') is-invalid @enderror"
                                            name="postal_code" value="{{ old('postal_code') }}" required
                                            autocomplete="postal_code" autofocus>
                                        @error('postal_code')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-4">
                                    <label for="district" class="col-md-4 col-form-label">{{ __('District') }}</label>
                                    <div class="col">
                                        <input id="district" type="text"
                                            class="form-control @error('district') is-invalid @enderror" name="district"
                                            value="{{ old('district') }}" required autocomplete="district" autofocus>
                                        @error('district')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-4">
                                        <label for="province"
                                            class="col-md-4 col-form-label">{{ __('Province') }}</label>
                                        <div class="col">
                                            <input id="province" type="text"
                                                class="form-control @error('province') is-invalid @enderror"
                                                name="province" value="{{ old('province') }}" required
                                                autocomplete="province" autofocus>
                                            @error('province')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <h5>Financial Information</h5>
                                <hr class="mb-5 mt-4">

                                <!-- Financial Information Section -->
                                <div class="row mb-4 mt-3">
                                    <div class="col-3">
                                        <label for="employment_sector"
                                            class="col col-form-label">{{ __('Employment Sector') }}</label>
                                    </div>
                                    <div class="col-9">
                                        <select class="form-select" name="employment_sector"
                                            aria-label="Employment Sector">
                                            <option selected>Select Employment Sector</option>
                                            <option value="public">Public</option>
                                            <option value="private">Private</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-4 mt-3">
                                    <div class="col-3">
                                        <label for="profession" class="col col-form-label">{{ __('Profession') }}</label>
                                    </div>
                                    <div class="col-9">
                                        <select class="form-select" name="profession" aria-label="Profession">
                                            <option selected>Select Profession</option>
                                            <option value="teacher">Teacher</option>
                                            <option value="engineer">Engineer</option>
                                            <option value="doctor">Doctor</option>
                                            <option value="lawyer">Lawyer</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-4 mt-3">
                                    <div class="col-3">
                                        <label for="employment_type"
                                            class="col col-form-label">{{ __('Employment Type') }}</label>
                                    </div>
                                    <div class="col-9">
                                        <select class="form-select" name="employment_type" aria-label="Employment Type">
                                            <option selected>Select Employment Type</option>
                                            <option value="confirmed">Confirmed</option>
                                            <option value="contract">Contract</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-4 mt-3">
                                    <div class="col-3">
                                        <label for="gross_salary"
                                            class="col col-form-label">{{ __('Gross Salary') }}</label>
                                    </div>
                                    <div class="col-9">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Rs.</span>
                                            <input type="number" class="form-control" id="gross_salary"
                                                name="gross_salary" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4 mt-3">
                                    <div class="col-3">
                                        <label for="net_salary" class="col col-form-label">{{ __('Net Salary') }}</label>
                                    </div>
                                    <div class="col-9">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Rs.</span>
                                            <input type="number" class="form-control" id="net_salary" name="net_salary"
                                                required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4 mt-3">
                                    <div class="col-3">
                                        <label for="other_income"
                                            class="col col-form-label">{{ __('Other Income') }}</label>
                                    </div>
                                    <div class="col-9">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Rs.</span>
                                            <input type="number" class="form-control" id="other_income"
                                                name="other_income" required>
                                        </div>
                                    </div>
                                </div>

                                <h5>Loan Information</h5>
                                <hr class="mb-5 mt-4">

                                <!-- Loan Information Section -->
                                <div class="row mb-4 mt-5">
                                    <div class="col-3">
                                        <label for="loan_type" class="col col-form-label">{{ __('Loan Type') }}</label>
                                    </div>
                                    <div class="col-9">
                                        <select class="form-select" name="loan_type" aria-label="Loan Type">
                                            <option selected>Select Loan Type</option>
                                            <option value="personal">Personal</option>
                                            <option value="educational">Educational</option>
                                            <option value="housing">Housing</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-4 mt-5">
                                    <div class="col-3">
                                        <label for="repayment_method"
                                            class="col col-form-label">{{ __('Re-payment Method') }}</label>
                                    </div>
                                    <div class="col-9">
                                        <select class="form-select" name="repayment_method"
                                            aria-label="Repayment Method">
                                            <option selected>Select Re-payment Method</option>
                                            <option value="equated">Equated Installment</option>
                                            <option value="reducing">Reducing Balance</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group mt-4">
                                    <div class="row">
                                        <div class="col-3 mt-2">
                                            <label for="loan_amount">Loan Amount</label>
                                        </div>
                                        <div class="col-9">
                                            <div class="input-group">
                                                <span class="input-group-text">Rs.</span>
                                                <input type="number" class="form-control" id="loan_amount"
                                                    name="loan_amount" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-5 mb-3 justify-content-center">
                                    <div class="col-5">
                                        <button type="submit" class="btn btn-primary float-end">Proceed</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
