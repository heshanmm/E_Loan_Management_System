<head>
    <style>
        .card {
            background-color: rgb(208, 232, 255);
            margin-right: 1rem;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .card:hover {
            background-color: rgb(175, 203, 254);
            transform: scale(1.05);
            z-index: 1;
        }
    </style>
</head>

@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center mt-3">
            <div class="card col-3 mx-5">
                <div class="card-header">
                    Existing Customer
                </div>
                <br>
                <div class="card-body">
                    <img src="images/create_users5.svg" alt="create_users5.svg" style="height: 10rem; margin:0rem 2rem 1rem 2rem ; ">
                    <a href="{{ url('loanofficer/apply_loan_ii') }}" class="btn btn-outline-primary"
                        style="margin: 1rem 2rem 0rem 6rem;">Apply</a>
                </div>

            </div>
            <div class="card col-3">
                <div class="card-header">
                    New Customer
                </div>
                <br>
                <div class="card-body">
                    <img src="images/create_users6.svg" alt="create_users6.svg" style="height: 10rem; margin:0rem 2rem 1rem 2rem ; ">
                    <a href="{{ url('emi-calculator') }}" class="btn btn-outline-primary"
                        style="margin:1rem 2rem 0rem 6rem">Apply</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
