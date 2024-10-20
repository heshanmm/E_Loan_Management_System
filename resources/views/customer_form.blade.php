@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="title-container">
            <h2><b>Customer Registration</b></h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('customer_list') }}">Customers / </a></li>
                </ol>
            </nav>
        </div>

    </div>

    <div class="customer-form container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card" style="background-color: rgba(136, 211, 255, 0.411)">
                    <div class="card-header">{{ __('Customer Registration Form') }}</div>
                    <div class="card-body">
                        <form method="POST" action="#">
                            @csrf
                            <div class="accordion" id="customerAccordion">
                                <!-- Personal Information Accordion -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingPersonal">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapsePersonal" aria-expanded="true"
                                            aria-controls="collapsePersonal">
                                            Personal Information
                                        </button>
                                    </h2>
                                    <div id="collapsePersonal" class="accordion-collapse collapse show"
                                        aria-labelledby="headingPersonal" data-bs-parent="#customerAccordion">
                                        <div class="accordion-body">
                                            <p><i>The information given in this section is considered as the information of
                                                    the primary account owner.</i></p>
                                            <hr class="mb-4">

                                            
                                            <div class="row mb-4">
                                                <div class="col-4">
                                                    <label for="first_name"
                                                        class="form-label">{{ __('First Name') }}</label>
                                                    <input id="first_name" type="text"
                                                        class="form-control @error('first_name') is-invalid @enderror"
                                                        name="first_name" value="{{ old('first_name') }}" required>
                                                    @error('first_name')
                                                        <span
                                                            class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                                <div class="col-4">
                                                    <label for="middle_name"
                                                        class="form-label">{{ __('Middle Name') }}</label>
                                                    <input id="middle_name" type="text"
                                                        class="form-control @error('middle_name') is-invalid @enderror"
                                                        name="middle_name" value="{{ old('middle_name') }}">
                                                    @error('middle_name')
                                                        <span
                                                            class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                                <div class="col-4">
                                                    <label for="last_name" class="form-label">{{ __('Last Name') }}</label>
                                                    <input id="last_name" type="text"
                                                        class="form-control @error('last_name') is-invalid @enderror"
                                                        name="last_name" value="{{ old('last_name') }}" required>
                                                    @error('last_name')
                                                        <span
                                                            class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>

                                            
                                            <div class="row mb-4">
                                                <div class="col-4 mt-4">
                                                    <select class="form-select" name="title">
                                                        <option value="" selected>Title</option>
                                                        <option value="mr">Mr.</option>
                                                        <option value="mrs">Mrs.</option>
                                                        <option value="miss">Miss.</option>
                                                    </select>
                                                </div>
                                                <div class="col-8">
                                                    <label for="name"
                                                        class="form-label">{{ __('Name With Initials') }}</label>
                                                    <input id="name" type="text"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        name="name" value="{{ old('name') }}" required>
                                                    @error('name')
                                                        <span
                                                            class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-4">
                                                <div class="col-4">
                                                    <label for="nic" class="form-label">{{ __('NIC No.') }}</label>
                                                    <input id="nic" type="text"
                                                        class="form-control @error('nic') is-invalid @enderror"
                                                        name="nic" value="{{ old('nic') }}" required>
                                                    @error('nic')
                                                        <span
                                                            class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                                <div class="col-4">
                                                    <label for="gender" class="form-label">{{ __('Gender') }}</label>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="gender"
                                                                id="male" value="male">
                                                            <label class="form-check-label" for="male">Male</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="gender"
                                                                id="female" value="female">
                                                            <label class="form-check-label" for="female">Female</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <label for="dob"
                                                        class="form-label">{{ __('Date of Birth') }}</label>
                                                    <input id="dob" type="date"
                                                        class="form-control @error('dob') is-invalid @enderror"
                                                        name="dob" value="{{ old('dob') }}" required>
                                                    @error('dob')
                                                        <span
                                                            class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-4">
                                                <div class="col-6">
                                                    <label class="form-label">{{ __('Citizenship') }}</label>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="citizenship" id="srilankan" value="srilankan">
                                                            <label class="form-check-label" for="srilankan">Sri
                                                                Lankan</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="citizenship" id="other" value="other">
                                                            <label class="form-check-label" for="other">Other</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label class="form-label">{{ __('Civil Status') }}</label>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="civil_status" id="married" value="married">
                                                            <label class="form-check-label" for="married">Married</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="civil_status" id="unmarried" value="unmarried">
                                                            <label class="form-check-label"
                                                                for="unmarried">Unmarried</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="civil_status" id="otherStatus" value="other">
                                                            <label class="form-check-label"
                                                                for="otherStatus">Other</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
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
                                                    <label for="email" class="form-label">{{ __('E-mail') }}</label>
                                                    <input id="email" type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        name="email" value="{{ old('email') }}" required>
                                                    @error('email')
                                                        <span
                                                            class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                                <div class="col-6">
                                                    <label for="contact"
                                                        class="form-label">{{ __('Contact Number') }}</label>
                                                    <input id="contact" type="text"
                                                        class="form-control @error('contact') is-invalid @enderror"
                                                        name="contact" value="{{ old('contact') }}" required>
                                                    @error('contact')
                                                        <span
                                                            class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingAddress">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseAddress"
                                            aria-expanded="false" aria-controls="collapseAddress">
                                            Permanent Address
                                        </button>
                                    </h2>
                                    <div id="collapseAddress" class="accordion-collapse collapse"
                                        aria-labelledby="headingAddress" data-bs-parent="#customerAccordion">
                                        <div class="accordion-body">
                                            <div class="row mb-4">
                                                <div class="col-4">
                                                    <label for="address_line_1"
                                                        class="col-md-4 col-form-label">{{ __('Address Line 1') }}</label>
                                                    <div class="col">
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
                                                </div>

                                                <div class="col-4">
                                                    <label for="address_line_2"
                                                        class="col-md-4 col-form-label">{{ __('Address Line 2') }}</label>
                                                    <div class="col">
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
                                                </div>

                                                <div class="col-4">
                                                    <label for="address_line_3"
                                                        class="col-md-4 col-form-label">{{ __('Address Line 3') }}</label>
                                                    <div class="col">
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
                                                    <label for="district"
                                                        class="col-md-4 col-form-label">{{ __('District') }}</label>
                                                    <div class="col">
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
                                        </div>
                                    </div>
                                </div>


                                
                                <div class="row mt-4">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop
