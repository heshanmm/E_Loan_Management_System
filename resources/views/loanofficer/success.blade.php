@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-7 mt-5">
                <div class="card shadow-lg border-0"
                    style="background-color: rgba(52, 172, 252, 0.377); border-radius: 15px;">
                    <div class="card-body text-center">
                        <div class="d-flex justify-content-center mb-3">
                            <div class="icon-box"
                                style="background: rgba(85, 252, 52, 0.5); border-radius: 50%; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                                <i class="fa-solid fa-check-circle" style="font-size: 30px; color: #14bd05;"></i>
                            </div>
                        </div>
                        <h4 class="fw-bold" style="color: #1d6fa5;">Application Submitted Successfully!</h4>
                        <p class="text-muted">Your application details are as follows:</p>
                        <ul class="list-group list-group-flush text-center mb-3 mx-5">
                            <li class="list-group-item bg-transparent"><strong>Name:</strong> {{ $loanApplication->name }}</li>
                            <li class="list-group-item bg-transparent"><strong>Loan ID:</strong> {{ $loanApplication->id }}</li>
                        </ul>
                        
                        <p style="color: #d53a3a;"><i class="fa-solid fa-circle-info"></i> Your application is now under
                            review by the manager.</p>
                        <div class="d-flex justify-content-center mt-4">
                            <a href="{{ url('loanofficer/loanofficer_dashboard') }}" class="btn btn-primary btn-lg px-4"
                                style="border-radius: 25px;">
                                <i class="fa-solid fa-arrow-left me-2"></i> Back to Home
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
