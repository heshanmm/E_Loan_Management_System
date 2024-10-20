<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script src="https://kit.fontawesome.com/eb32480f52.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md" style="position: fixed; z-index: 1000;">
            <div class="container-fluid">
                <img src="images/eloan_logo.png" class="logo" alt="" style="height: 40px;">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation" style="padding: 2px 6px;">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto"></ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link" href="#" role="button" aria-haspopup="true"
                                style="color: aliceblue; font-size:18px; margin-right:20px; margin-top:7px; padding-top: 2px; padding-bottom: 2px;"
                                aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                                style="padding-top: 2px; padding-bottom: 2px; font-size: 12px; color: aliceblue;">
                                <i class="fa-solid fa-power-off" style="color: aliceblue; margin-left: 10px;"></i>
                                <br>
                                <span style="font-size: 12px; color: aliceblue;">logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 p-0 mt-1">
                    @Auth
                        @if (Auth::user()->usertype === 'admin')
                            {{-- Admin Side Bar --}}
                            <div class="admin-sidebar">
                                <h3><b>Admin</b></h3>
                                <div class="list-item">
                                    <a href="{{ url('home') }}" class="nav-link">
                                        <li class="nav-item">
                                            <span class="icon">
                                                <i class="fa-solid fa-house"></i>
                                            </span>
                                            <span>Home</span>
                                        </li>
                                    </a>
                                </div>

                                <div class="list-item">
                                    <a href="#" class="nav-link" data-bs-toggle="collapse" data-bs-target="#submenu-1"
                                        aria-expanded="false" aria-controls="submenu-1" id="toggle-menu">
                                        <span class="icon">
                                            <i class="fa-solid fa-users"></i>
                                        </span>
                                        <span class="description">System Users
                                            <i class="fa-solid fa-caret-down mx-3" id="caret-icon"></i>
                                        </span>
                                    </a>

                                    <div class="list-sub-item collapse" id="submenu-1">
                                        <a href="{{ url('admin/manager_list') }}" class="nav-link">
                                            <span class="icon">
                                                <i class="fa-solid fa-user"></i>
                                            </span>
                                            <span class="description">Managers</span>
                                        </a>
                                    </div>
                                    <div class="list-sub-item collapse" id="submenu-1">
                                        <a href="{{ url('admin/loanofficer_list') }}" class="nav-link">
                                            <span class="icon">
                                                <i class="fa-solid fa-user"></i>
                                            </span>
                                            <span class="description">Loan Officers</span>
                                        </a>
                                    </div>
                                </div>

                                <script>
                                    document.getElementById('toggle-menu').addEventListener('click', function(event) {
                                        const caretIcon = document.getElementById('caret-icon');
                                        caretIcon.classList.toggle('rotate-90');
                                    });
                                </script>

                                <div class="list-item">
                                    <a href="#" class="nav-link">
                                        <span class="icon">
                                            <i class="fa-solid fa-users"></i>
                                        </span>
                                        <span class="description">Bank Customers</span>
                                    </a>
                                </div>
                            </div>
                        @elseif(Auth::user()->usertype === 'manager')
                            {{-- Manager Sidebar --}}
                            <div class="admin-sidebar">
                                <h3><b>Manager</b></h3>
                                <div class="list-item">
                                    <a href="{{ url('home') }}" class="nav-link">
                                        <li class="nav-item">
                                            <span class="icon">
                                                <i class="fa-solid fa-house"></i>
                                            </span>
                                            <span>Home</span>
                                        </li>
                                    </a>
                                </div>

                                <div class="list-item">
                                    <a href="#" class="nav-link" data-bs-toggle="collapse"
                                        data-bs-target="#submenu-1" aria-expanded="false" aria-controls="submenu-1"
                                        id="toggle-menu">
                                        <span class="icon">
                                            <i class="fa-solid fa-users"></i>
                                        </span>
                                        <span class="description">Customers
                                            <i class="fa-solid fa-caret-down mx-3" id="caret-icon"></i>
                                        </span>
                                    </a>

                                    <div class="list-sub-item collapse" id="submenu-1">
                                        <a href="{{ url('customer_list') }}" class="nav-link">
                                            <span class="icon">
                                                <i class="fa-solid fa-user"></i>
                                            </span>
                                            <span class="description">Customer List</span>
                                        </a>
                                    </div>
                                    {{-- <div class="list-sub-item collapse" id="submenu-1">
                                        <a href="{{ url('customer_form') }}" class="nav-link">
                                            <span class="icon">
                                                <i class="fa-solid fa-user"></i>
                                            </span>
                                            <span class="description">New Customer</span>
                                        </a>
                                    </div> --}}
                                </div>

                                <div class="list-item">
                                    <a href="{{ url('emi_calculator') }}" class="nav-link">
                                        <span class="icon">
                                            <i class="fa-solid fa-calculator"></i>
                                        </span>
                                        <span class="description">Trial Calculation</span>
                                    </a>
                                </div>

                                <div class="list-item">
                                    <a href="{{ url('manager/loan_list') }}" class="nav-link">
                                        <span class="icon">
                                            <i class="fa-solid fa-file"></i>
                                        </span>
                                        <span class="description">All Loans</span>
                                    </a>
                                </div>


                                <script>
                                    document.getElementById('toggle-menu').addEventListener('click', function(event) {
                                        const caretIcon = document.getElementById('caret-icon');
                                        caretIcon.classList.toggle('rotate-90');
                                    });
                                </script>
                            </div>
                        @elseif(Auth::user()->usertype === 'loanofficer')
                            {{-- Loan officer sidebar --}}
                            <div class="admin-sidebar">
                                <h3><b>Loan Officer</b></h3>
                                <div class="list-item">
                                    <a href="{{ url('home') }}" class="nav-link">
                                        <li class="nav-item">
                                            <span class="icon">
                                                <i class="fa-solid fa-house"></i>
                                            </span>
                                            <span>Home</span>
                                        </li>
                                    </a>
                                </div>

                                <div class="list-item">
                                    <a href="#" class="nav-link" data-bs-toggle="collapse"
                                        data-bs-target="#submenu-1" aria-expanded="false" aria-controls="submenu-1"
                                        id="toggle-menu">
                                        <span class="icon">
                                            <i class="fa-solid fa-users"></i>
                                        </span>
                                        <span class="description">Customers
                                            <i class="fa-solid fa-caret-down mx-3" id="caret-icon"></i>
                                        </span>
                                    </a>

                                    <div class="list-sub-item collapse" id="submenu-1">
                                        <a href="{{ url('customer_list') }}" class="nav-link">
                                            <span class="icon">
                                                <i class="fa-solid fa-user"></i>
                                            </span>
                                            <span class="description">Customer List</span>
                                        </a>
                                    </div>
                                    <div class="list-sub-item collapse" id="submenu-1">
                                        <a href="{{ url('customer_form') }}" class="nav-link">
                                            <span class="icon">
                                                <i class="fa-solid fa-user"></i>
                                            </span>
                                            <span class="description">New Customer</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="list-item">
                                    <a href="{{ url('emi_calculator') }}" class="nav-link">
                                        <span class="icon">
                                            <i class="fa-solid fa-calculator"></i>
                                        </span>
                                        <span class="description">Trial Calculation</span>
                                    </a>
                                </div>

                                <div class="list-item">
                                    <a href="{{ url('manager/loan_list') }}" class="nav-link">
                                        <span class="icon">
                                            <i class="fa-solid fa-file"></i>
                                        </span>
                                        <span class="description">All Loans</span>
                                    </a>
                                </div>

                                <div class="list-item">
                                    <a href="{{ url('loanofficer/apply_loan_ii') }}" class="nav-link">
                                        <span class="icon">
                                            <i class="fa-solid fa-file"></i>
                                        </span>
                                        <span class="description">Loan Application</span>
                                    </a>
                                </div>

                                <script>
                                    document.getElementById('toggle-menu').addEventListener('click', function(event) {
                                        const caretIcon = document.getElementById('caret-icon');
                                        caretIcon.classList.toggle('rotate-90');
                                    });
                                </script>
                            </div>
                        @endif
                    </div>
                @endauth
                <div class="col-md-10 mt-1">
                    <div class="content-container">
                        <main class="py-4">
                            @yield('content')
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
