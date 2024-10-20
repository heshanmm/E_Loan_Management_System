<body style="background-color: rgb(206, 228, 255);">
    @extends('layouts.app')

    @section('content')
        <div class="container">
            <div class="title-container">
                <h2><b>Customer Details</b></h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('customer_list') }}">Customers </a></li>
                        <li class="breadcrumb-item"><a href="#">Customer Details / </a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="customer-form container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">{{ __('Customer Details') }}</div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3 row">
                                    <label for="name" class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" readonly class="form-control" id="name"
                                            value="{{ $customer->name }}">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="nic" class="col-sm-3 col-form-label">NIC</label>
                                    <div class="col-sm-9">
                                        <input type="text" readonly class="form-control" id="nic"
                                            value="{{ $customer->nic }}">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" readonly class="form-control" id="email"
                                            value="{{ $customer->email }}">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="contact" class="col-sm-3 col-form-label">Contact</label>
                                    <div class="col-sm-9">
                                        <input type="text" readonly class="form-control" id="contact"
                                            value="{{ $customer->contact }}">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="gender" class="col-sm-3 col-form-label">Gender</label>
                                    <div class="col-sm-9">
                                        <input type="text" readonly class="form-control" id="gender"
                                            value="{{ $customer->gender }}">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="dob" class="col-sm-3 col-form-label">Date of Birth</label>
                                    <div class="col-sm-9">
                                        <input type="text" readonly class="form-control" id="dob"
                                            value="{{ $customer->dob->format('d-m-Y') }}">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="citizenship" class="col-sm-3 col-form-label">Citizenship</label>
                                    <div class="col-sm-9">
                                        <input type="text" readonly class="form-control" id="citizenship"
                                            value="{{ $customer->citizenship }}">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="civil_status" class="col-sm-3 col-form-label">Civil Status</label>
                                    <div class="col-sm-9">
                                        <input type="text" readonly class="form-control" id="civil_status"
                                            value="{{ $customer->civil_status }}">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="address" class="col-sm-3 col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" readonly class="form-control" id="address"
                                            value="{{ $customer->address_line_1 }}, {{ $customer->address_line_2 }}, {{ $customer->address_line_3 }}">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="postal_code" class="col-sm-3 col-form-label">Postal Code</label>
                                    <div class="col-sm-9">
                                        <input type="text" readonly class="form-control" id="postal_code"
                                            value="{{ $customer->postal_code }}">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="district" class="col-sm-3 col-form-label">District</label>
                                    <div class="col-sm-9">
                                        <input type="text" readonly class="form-control" id="district"
                                            value="{{ $customer->district }}">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="province" class="col-sm-3 col-form-label">Province</label>
                                    <div class="col-sm-9">
                                        <input type="text" readonly class="form-control" id="province"
                                            value="{{ $customer->province }}">
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-sm-7 text-end">
                                        <a href="{{ route('customer_list') }}" class="btn btn-primary">Back to List</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection



</body>
