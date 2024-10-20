<head>
    <style>
        .card {
            background-color: rgb(208, 232, 255);
            margin-right: 1rem;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .card:hover {
            background-color: rgb(175, 203, 254);
            transform: scale(1.05);
            z-index: 1;
        }
    </style>
</head>

<body>
    @extends('layouts.app')

    @section('content')
        <div class="container">
            <div class="title-container">
                <h2><b>Home</b></h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home / </a></li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="container text-center">
            <h1><b>Welcome to Loanofficer Module</b></h1>
            <img src="images/banner.png" class="img-fluid" alt="" style=""> 
        </div>
    @endsection


</body>
