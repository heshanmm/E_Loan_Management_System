<body style="background-color: rgb(206, 228, 255);">
    @extends('layouts.app')

    @section('content')
        <div class="container" style="background-color: rgb(206, 228, 255);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-header">{{ __('Apply for a loan') }}</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-7">
                                        <h6>Existing Customer</h6>
                                    </div>
                                    <div class="col-5"> <a href="{{ url('loanofficer\apply_loan_ii') }}"
                                            class="btn btn-primary float-end">Proceed</a>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-7">
                                        <h6>New Customer</h6>
                                    </div>
                                    <div class="col-5"> <a href="{{ url('emi-calculator') }}"
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
