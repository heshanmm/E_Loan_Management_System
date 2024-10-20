@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            </ol>
        </nav>
        <div class="row">
            <div class="card">
                <div class="card-header">
                    Security Documents Upload
                </div>
                <i class="mt-3">Please upload all documents in PDF format.</i>
                <br>
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <div class="card" style="padding:1rem">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Salary Slipt</label>
                                    <input class="form-control" type="file" id="salarySlipt">
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card" style="padding:1rem">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Fixed Deposit Reciepts</label>
                                    <input class="form-control" type="file" id="fdReciept">
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card" style="padding:1rem">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Assets</label>
                                    <input class="form-control" type="file" id="asset">
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card" style="padding:1rem">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Other Necessary Documant</label>
                                    <input class="form-control" type="file" id="otherDoc">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5 mb-3 justify-content-center" style="margin-left: 15em">
                        <div class="col-5">
                            <a href="{{ route('home') }}" class="btn btn-outline-primary" onclick="showAlert()">Submit</a>
                        </div>

                        <script>
                            function showAlert() {
                                alert('File uploaded successfully');
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
