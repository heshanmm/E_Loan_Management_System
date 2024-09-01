<body style="background-color: rgb(206, 228, 255);">
    @extends('layouts.app')

    @section('content')
        <div class="container">
            <h2>Customer Details</h2>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $customer->name }}</h5>
                    <p class="card-text"><strong>NIC:</strong> {{ $customer->nic }}</p>
                    <p class="card-text"><strong>Email:</strong> {{ $customer->email }}</p>
                    <p class="card-text"><strong>Contact:</strong> {{ $customer->contact }}</p>
                    <p class="card-text"><strong>Gender:</strong> {{ $customer->gender }}</p>
                    <p class="card-text"><strong>Date of Birth:</strong> {{ $customer->dob->format('d-m-Y') }}</p>
                    <p class="card-text"><strong>Citizenship:</strong> {{ $customer->citizenship }}</p>
                    <p class="card-text"><strong>Civil Status:</strong> {{ $customer->civil_status }}</p>
                    <p class="card-text"><strong>Address Line 1:</strong> {{ $customer->address_line_1 }}</p>
                    <p class="card-text"><strong>Address Line 2:</strong> {{ $customer->address_line_2 }}</p>
                    <p class="card-text"><strong>Address Line 3:</strong> {{ $customer->address_line_3 }}</p>
                    <p class="card-text"><strong>Postal Code:</strong> {{ $customer->postal_code }}</p>
                    <p class="card-text"><strong>District:</strong> {{ $customer->district }}</p>
                    <p class="card-text"><strong>Province:</strong> {{ $customer->province }}</p>
                    <a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-primary">Edit Details</a>
                    <a href="{{ route('customer_list') }}" class="btn btn-primary">Back to List</a>
                </div>
            </div>
        </div>
    @endsection

    <!-- Include Bootstrap JS or other scripts here -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
