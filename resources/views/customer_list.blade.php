<body style="background-color: rgb(206, 228, 255);">
    @extends('layouts.app')

    @section('content')
        <div class="container">
            @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif

            <div class="row">
                <div class="col-8">
                    <h2>Customers</h2>
                </div>
                <div class="col-4">
                    <a href="loanofficer_dashboard" class="btn btn-info btn-sm">back</a>
                </div>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">NIC</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->nic }}</td>
                            <td>{{ $customer->email }}</td>
                            <td><a href="{{ route('customer.view', $customer->id) }}" class="btn btn-info btn-sm">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection
</body>
