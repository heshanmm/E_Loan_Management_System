    @extends('layouts.app')

    @section('content')
        <div class="title-container">
            <h2><b>Loans</b></h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="">Loans / </a></li>
                </ol>
            </nav>
        </div>
        <div class="table-container">
            <div class="row justify-content-center">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Loan No.</th>
                            <th>Account No.</th>
                            <th>Loan Type</th>
                            <th>Loan Amount</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($loanApplications as $application)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $application->account_no }}</td>
                                <td>{{ $application->loan_type }}</td>
                                <td>Rs. {{ number_format($application->loan_amount, 2) }}</td>
                                <td><button type="button" class="btn btn-warning btn-sm">Pending</button>
                                </td>
                                <td>
                                    <a href="{{ route('loan.show', ['id' => $application->id]) }}"
                                        class="btn btn-info btn-sm">Check</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">No loan applications found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="d-flex justify-content-end mt-3 mx-4">
                    {{ $loanApplications->links('pagination::bootstrap-4') }}
                </div>
            </div>


        </div>
    @endsection
    </body>
