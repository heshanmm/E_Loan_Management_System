<body style="background-color: rgb(206, 228, 255);">
    @extends('layouts.app')

    @section('content')
        <div class="container">
            @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            <h2>Managers</h2>
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
                    @foreach ($users as $manager)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $manager->name }}</td>
                            <td>{{ $manager->email }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="#" type="button" class="btn btn-secondary">Detail</a>
                                    <a href="{{ route('manager_edit', $manager->email) }}" type="button" class="btn btn-warning pt-1 m-0 ">Edit</a>
                                    <form action="{{ route('manager_delete', $manager->email) }}" method="POST" type="button" class="btn btn-danger pt-1 m-0" onsubmit="return confirm('Delete?')">
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
