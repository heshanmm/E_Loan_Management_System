@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9">
                <div class="card" style="background-color: rgb(214, 231, 255)">
                    <div class="card-header">{{ __('Customer Registration Form') }}</div>

                    <div class="card-body">
                        <form method="POST" action="#">
                            @csrf
                            <h5>Personal Information</h5>
                            <p class="mt-4"><i>The information given in this section is considered as the information of
                                    the primary account owner.</i></p>
                            <hr class="mb-5">

                            <div class="row mb-4 mt-5">
                                <div class="col-4">
                                    <label for="first_name" class="col-md-4 col-form-label">{{ __('First Name') }}</label>
                                    <div class="col">
                                        <input id="first_name" type="text"
                                            class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                                            value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                                        @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label for="middle_name" class="col-md-4 col-form-label">{{ __('Middle Name') }}</label>
                                    <div class="col">
                                        <input id="middle_name" type="text"
                                            class="form-control @error('middle_name') is-invalid @enderror"
                                            name="middle_name" value="{{ old('middle_name') }}" autocomplete="middle_name"
                                            autofocus>
                                        @error('middle_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label for="last_name" class="col-md-4 col-form-label">{{ __('Last Name') }}</label>
                                    <div class="col">
                                        <input id="last_name" type="text"
                                            class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                                            value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                                        @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4 mt-5">
                                <div class="col-4">
                                    <select class="form-select" name="title">
                                        <option value="" selected>Title</option>
                                        <option value="mr">Mr.</option>
                                        <option value="mrs">Mrs.</option>
                                        <option value="miss">Miss.</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="name" class="col col-form-label">{{ __('Name With Initials') }}</label>
                                </div>
                                <div class="col-6">
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
                                <div class="col-4">
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
                            </div>

                            <div class="row mb-4 mt-5">
                                <div class="col-6">
                                    <div class="row">
                                        <label for="gender" class="col-md-4 col-form-label">{{ __('Gender') }}</label>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" id="male"
                                                    value="male">
                                                <label class="form-check-label" for="male">Male</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="female" value="female">
                                                <label class="form-check-label" for="female">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="dob" class="col-4 col-form-label">{{ __('Date of Birth') }}</label>
                                    <div class="col-8">
                                        <input id="dob" type="date"
                                            class="form-control mt-3 @error('dob') is-invalid @enderror" name="dob"
                                            value="{{ old('dob') }}" required autocomplete="dob" autofocus>
                                        @error('dob')
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
                                <div class="col-6">
                                    <div class="row">
                                        <label for="civil_status"
                                            class="col-md-4 col-form-label">{{ __('Civil Status') }}</label>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="civil_status"
                                                    id="married" value="married">
                                                <label class="form-check-label" for="married">Married</label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="civil_status"
                                                    id="unmarried" value="unmarried">
                                                <label class="form-check-label" for="unmarried">Unmarried</label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="civil_status"
                                                    id="other" value="other">
                                                <label class="form-check-label" for="other">Other</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h5 class="mt-5">Contact Information</h5>
                            <hr>

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
                                </div>

                                <div class="col-4">
                                    <label for="province" class="col-md-4 col-form-label">{{ __('Province') }}</label>
                                    <div class="col">
                                        <input id="province" type="text"
                                            class="form-control @error('province') is-invalid @enderror" name="province"
                                            value="{{ old('province') }}" required autocomplete="province" autofocus>
                                        @error('province')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-5 mb-3 justify-content-center">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
