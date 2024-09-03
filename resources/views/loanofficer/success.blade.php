@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card" style="background-color: rgb(214, 231, 255)">
                    <div class="card-header">{{ __('Loan Application Successful') }}</div>

                    <div class="card-body">
                        <p>Application has been successfully submitted.</p>
                        <p>Here are the details of your application:</p>
                        <ul>
                            <li><strong>Name:</strong> {{ $loanApplication->name }}</li>
                            <li><strong>NIC No:</strong> {{ $loanApplication->nic }}</li>
                        </ul>

                        <p>Manager will consider this application.</p>

                        <div class="row mt-5 mb-3 justify-content-center">
                            <div class="col-5"> <a href="{{ url('loanofficer/loanofficer_dashboard') }}"
                                    class="btn btn-primary float-end">Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
