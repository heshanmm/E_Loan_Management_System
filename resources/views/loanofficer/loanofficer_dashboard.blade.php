<body style="background-color: rgb(206, 228, 255);">
    @extends('layouts.app')

    @section('content')
        <div class="container" style="background-color: rgb(206, 228, 255);">
            <h2>Loan Officer</h2>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-header">{{ __('Customer Registration Form') }}</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-7">
                                        <h6>Customer Registration</h6>
                                    </div>
                                    <div class="col-5"> <a href="{{ url('customer_form') }}"
                                            class="btn btn-primary float-end">Proceed</a>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-7">
                                        <h6>Trial Calculation</h6>
                                    </div>
                                    <div class="col-5"> <a href="{{ url('emi') }}"
                                            class="btn btn-primary float-end">Proceed</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection


</body>
