@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="title-container">
            <h2><b>Bank loanofficers</b></h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('loanofficer_list') }}">loanofficers / </a></li>
                </ol>
            </nav>
        </div>
        <div class="add-new-button d-flex justify-content-end">
            <a href="{{ url('admin/manager_form') }}" class="btn btn-primary">
                <i class="fa-solid fa-plus"></i> Add New
            </a>
        </div>
    </div>
    <div class="container">
        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="table-container">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                {{-- <tbody>
                    @foreach ($users as $loanofficer)
                        <tr>
                            <th>{{ $loanofficer->id }}</th>
                            <td>{{ $loanofficer->name }}</td>
                            <td>{{ $loanofficer->email }}</td>
                            <td>{{ $loanofficer->contact }}</td>
                            <td>
                                <div class="icon-group d-flex align-items-center gap-3"
                                    style="display: flex; justify-content: center; align-items: center;">
                                    <a href="{{ route('loanofficer_view', $loanofficer->email) }}" class="text-secondary">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>

                                    <a href="{{ route('loanofficer_edit', $loanofficer->email) }}" class="text-warning">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>

                                    <form action="{{ route('loanofficer_delete', $loanofficer->email) }}" method="POST"
                                        class="d-inline" onsubmit="return confirm('Delete?')"
                                        style="display: inline-flex; align-items: center;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-icon"
                                            style="border: none; background: none; padding: 0;">
                                            <i class="fa-solid fa-trash text-danger"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-end mt-3 mx-4">
                {{ $users->links('pagination::bootstrap-4') }}
            </div> --}}
        </div>
    </div>
@endsection
