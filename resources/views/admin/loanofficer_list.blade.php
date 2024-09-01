<body style="background-color: rgb(206, 228, 255);">
    @extends('layouts.app')

    @section('content')
        <div class="container">
            @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            <h2>Loan officers</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $loanofficer)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $loanofficer->name }}</td>
                            <td>{{ $loanofficer->email }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('loanofficer_view', $loanofficer->email) }}" type="button" class="btn btn-secondary">VIew</a>
                                    <a href="{{ route('loanofficer_edit', $loanofficer->email) }}" type="button" class="btn btn-warning pt-1 m-0 ">Edit</a>
                                    <form action="{{ route('loanofficer_delete', $loanofficer->email) }}" method="POST" type="button" class="btn btn-danger pt-1 m-0" onsubmit="return confirm('Delete?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger p-0 m-0">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection

</body>

</html>

