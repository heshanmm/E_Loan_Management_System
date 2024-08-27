<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>

    </style>
</head>

<body style="background-color: rgb(237, 245, 255);">
    @extends('layouts.app')

    @section('content')
        <div class="container">
            <h2>Admin </h2>
            <br>
            <div class="row justify-content-center mt-3">
                <div class="card col-4" style="background-color: rgb(208, 232, 255);">
                    <div class="card-header">
                        Create Managers
                    </div>
                    <br>
                    <div class="card-body">
                        <p class="card-text">Add new managers to the system.</p>
                        <a href="{{ url('admin/manager_form') }}" class="btn btn-primary float-end">Create</a>
                    </div>
                </div>
                <div class="col-1"></div>
                <div class="card col-4" style="background-color: rgb(208, 232, 255);">
                    <div class="card-header">
                        Create Loan Officers
                    </div>
                    <br>
                    <div class="card-body">
                        <p class="card-text">Add new loan officers to the system.</p>
                        <a href="{{ url('admin/loanofficer_form') }}" class="btn btn-primary float-end">Create</a>
                    </div>
                </div>
            </div>
            <br>
            <div class="row justify-content-center mt-5">
                <div class="card col-4" style="background-color: rgb(208, 232, 255);">
                    <div class="card-header">
                        View Users
                    </div>
                    <br><br>
                    <div class="card-body">
                        <p class="card-text">View users of the system</p>
                        <a href="{{ url('admin/manager_list') }}" class="btn btn-primary float-end">View</a>
                    </div>
                </div>
                <div class="col-1"></div>
                <div class="card col-4" style="background-color: rgb(208, 232, 255);">
                    <div class="card-header">
                        Featured
                    </div>
                    <br>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary float-end">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    @endsection

</body>

</html>
