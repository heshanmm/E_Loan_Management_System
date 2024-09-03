@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-7">
                <div class="card" style="background-color: rgb(214, 231, 255)">
                    <div class="card-header">{{ __('Apply for a loan') }}</div>

                    <div class="card-body">
                        <form method="POST" action="#">
                            @csrf
                            <h5>Confirmation</h5>
                            <hr class="mb-5 mt-4">





                            <div class="row mt-5 mb-3 justify-content-center">
                                <div class="col-5"> <a href="{{ url('loanofficer/loanofficer_dashboard') }}"
                                        class="btn btn-primary float-end">Confirm</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
