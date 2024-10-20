<body>
    @extends('layouts.app')

    @section('content')
        <div class="container">
            <div class="title-container">
                <h2><b>Customers</b></h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('customer_list') }}">Customers / </a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container">

            @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif

            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Reg. No</th>
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
                                <td>
                                    <a href="{{ route('customer.view', $customer->id) }}" class="text-secondary">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
</body>
