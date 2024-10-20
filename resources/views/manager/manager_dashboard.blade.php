<body style="background-color: rgb(206, 228, 255);">
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
            <h1><b>Welcome to Manager Module</b></h1>
            <img src="images/banner.png" class="img-fluid" alt="" style="">
        </div>
    @endsection

</body>

</html>
