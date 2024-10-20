    @extends('layouts.app')

    @section('content')
        <div class="container">
            <div class="title-container">
                <h2><b>Loan Application</b></h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('customer_list') }}">Loan Application / </a></li>
                    </ol>
                </nav>
            </div>

        </div>
        <div class="customer-form container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('loanofficer.apply_loan_ii') }}">
                                @csrf
                                <!-- Accordion Section -->
                                <div class="accordion" id="personalInfoAccordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingPersonal">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsePersonal"
                                                aria-expanded="false" aria-controls="collapsePersonal">
                                                Personal Information
                                            </button>
                                        </h2>
                                        <div id="collapsePersonal" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#personalInfoPersonal">
                                            <div class="accordion-body">

                                                <!-- Personal Information Section -->
                                                <div class="row mb-4 mt-5">
                                                    <div class="col">
                                                        <label for="name"
                                                            class="col col-form-label">{{ __('Name With Initials') }}</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <input id="name" type="text"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            name="name" value="{{ old('name') }}" required
                                                            autocomplete="name" autofocus>
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row mb-4 mt-5">
                                                    <div class="col-5">
                                                        <label for="nic"
                                                            class="col-md-4 col-form-label">{{ __('NIC No.') }}</label>
                                                        <div class="col">
                                                            <input id="nic" type="text"
                                                                class="form-control @error('nic') is-invalid @enderror"
                                                                name="nic" value="{{ old('nic') }}" required
                                                                autocomplete="nic" autofocus>
                                                            @error('nic')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <label for="account_no"
                                                            class="col-md-4 col-form-label">{{ __('Account No.') }}</label>
                                                        <div class="col">
                                                            <input id="account_no" type="text"
                                                                class="form-control @error('account_no') is-invalid @enderror"
                                                                name="account_no" value="{{ old('account_no') }}" required
                                                                autocomplete="account_no" autofocus>
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
                                                                    <input class="form-check-input" type="radio"
                                                                        name="citizenship" id="srilankan" value="srilankan">
                                                                    <label class="form-check-label" for="srilankan">Sri
                                                                        Lankan</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="citizenship" id="other" value="other">
                                                                    <label class="form-check-label"
                                                                        for="other">Other</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6"></div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    {{-- Contact Details --}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingContact">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseContact"
                                                aria-expanded="false" aria-controls="collapseContact">
                                                Contact Information
                                            </button>
                                        </h2>
                                        <div id="collapseContact" class="accordion-collapse collapse"
                                            aria-labelledby="headingContact" data-bs-parent="#customerAccordion">
                                            <div class="accordion-body">
                                                <div class="row mb-4">
                                                    <div class="col-6">
                                                        <label for="email"
                                                            class="col-md-4 col-form-label">{{ __('E-mail') }}</label>
                                                        <div class="col">
                                                            <input id="email" type="email"
                                                                class="form-control @error('email') is-invalid @enderror"
                                                                name="email" value="{{ old('email') }}" required
                                                                autocomplete="email" autofocus>
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
                                                                class="form-control @error('contact') is-invalid @enderror"
                                                                name="contact" value="{{ old('contact') }}" required
                                                                autocomplete="contact" autofocus>
                                                            @error('contact')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Recidental Detail --}}

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingRecidental">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseRecidental"
                                                aria-expanded="false" aria-controls="collapseRecidental">
                                                Recidental Detail
                                            </button>
                                        </h2>
                                        <div id="collapseRecidental" class="accordion-collapse collapse"
                                            aria-labelledby="headingRecidental" data-bs-parent="#customerRecidental">
                                            <div class="accordion-body">
                                                <div class="row mb-4">
                                                    <div class="col-4">
                                                        <label for="address_line_1"
                                                            class="col-form-label">{{ __('Address Line 1') }}</label>
                                                        <input id="address_line_1" type="text"
                                                            class="form-control @error('address_line_1') is-invalid @enderror"
                                                            name="address_line_1" value="{{ old('address_line_1') }}"
                                                            required autocomplete="address_line_1" autofocus>
                                                        @error('address_line_1')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-4">
                                                        <label for="address_line_2"
                                                            class="col-form-label">{{ __('Address Line 2') }}</label>
                                                        <input id="address_line_2" type="text"
                                                            class="form-control @error('address_line_2') is-invalid @enderror"
                                                            name="address_line_2" value="{{ old('address_line_2') }}"
                                                            required autocomplete="address_line_2" autofocus>
                                                        @error('address_line_2')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-4">
                                                        <label for="address_line_3"
                                                            class="col-form-label">{{ __('Address Line 3') }}</label>
                                                        <input id="address_line_3" type="text"
                                                            class="form-control @error('address_line_3') is-invalid @enderror"
                                                            name="address_line_3" value="{{ old('address_line_3') }}"
                                                            required autocomplete="address_line_3" autofocus>
                                                        @error('address_line_3')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row mb-4">
                                                    <div class="col-4">
                                                        <label for="postal_code"
                                                            class="col-form-label">{{ __('Postal Code') }}</label>
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

                                                    <div class="col-4">
                                                        <label for="district"
                                                            class="col-form-label">{{ __('District') }}</label>
                                                        <input id="district" type="text"
                                                            class="form-control @error('district') is-invalid @enderror"
                                                            name="district" value="{{ old('district') }}" required
                                                            autocomplete="district" autofocus>
                                                        @error('district')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-4">
                                                        <label for="province"
                                                            class="col-form-label">{{ __('Province') }}</label>
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
                                        </div>
                                    </div>

                                    {{-- Security Details --}}

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSecurity">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseSecurity"
                                                aria-expanded="false" aria-controls="collapseSecurity">
                                                Security Details
                                            </button>
                                        </h2>
                                        <div id="collapseSecurity" class="accordion-collapse collapse"
                                            aria-labelledby="headingSecurity" data-bs-parent="#customerSecurity">
                                            <div class="accordion-body">
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
                                                        <label for="profession"
                                                            class="col col-form-label">{{ __('Profession') }}</label>
                                                    </div>
                                                    <div class="col-9">
                                                        <select class="form-select" name="profession"
                                                            aria-label="Profession">
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
                                                        <select class="form-select" name="employment_type"
                                                            aria-label="Employment Type">
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
                                                        <label for="net_salary"
                                                            class="col col-form-label">{{ __('Net Salary') }}</label>
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">Rs.</span>
                                                            <input type="number" class="form-control" id="net_salary"
                                                                name="net_salary" required>
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
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Loan Details --}}

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingLoan">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseLoan"
                                                aria-expanded="false" aria-controls="collapseLoan">
                                                Loan Details
                                            </button>
                                        </h2>
                                        <div id="collapseLoan" class="accordion-collapse collapse"
                                            aria-labelledby="headingLoan" data-bs-parent="#customerLoan">
                                            <div class="accordion-body">
                                                <div class="row mb-4 mt-5">
                                                    <div class="col-3">
                                                        <label for="loan_type"
                                                            class="col col-form-label">{{ __('Loan Type') }}</label>
                                                    </div>
                                                    <div class="col-9">
                                                        <select class="form-select" name="loan_type"
                                                            aria-label="Loan Type">
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
                                                                <input type="number" class="form-control"
                                                                    id="loan_amount" name="loan_amount" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- File Upload --}}

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingDocuments">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseDocuments"
                                                aria-expanded="false" aria-controls="collapseDocuments">
                                                Security Documents
                                            </button>
                                        </h2>
                                        <div id="collapseDocuments" class="accordion-collapse collapse"
                                            aria-labelledby="headingDocuments" data-bs-parent="#customerDocuments">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-5 mx-4">
                                                        <div class="card"
                                                            style="padding:1rem; background-color:rgba(0, 110, 255, 0.582)">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">Salary
                                                                    Slipt</label>
                                                                <input class="form-control" type="file"
                                                                    id="salarySlipt">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-1"></div>
                                                    <div class="col-5">
                                                        <div class="card"
                                                            style="padding:1rem; background-color:rgba(0, 110, 255, 0.582)">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">Fixed Deposit
                                                                    Reciepts</label>
                                                                <input class="form-control" type="file"
                                                                    id="fdReciept">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-5 mx-4">
                                                        <div class="card"
                                                            style="padding:1rem; background-color:rgba(0, 110, 255, 0.582)">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">Assets</label>
                                                                <input class="form-control" type="file"
                                                                    id="asset">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-1"></div>
                                                    <div class="col-5">
                                                        <div class="card"
                                                            style="padding:1rem; background-color:rgba(0, 110, 255, 0.582)">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">Other Necessary
                                                                    Documant</label>
                                                                <input class="form-control" type="file"
                                                                    id="otherDoc">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-5 mb-3 justify-content-center" style="margin-left: 10em">
                                    <div class="col-5">
                                        <button type="submit" class="btn btn-primary">Proceed</button>
                                    </div>
                                </div>
                            </form>
                            @if (session('message'))
                                <script>
                                    alert("{{ session('message') }}");
                                </script>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
