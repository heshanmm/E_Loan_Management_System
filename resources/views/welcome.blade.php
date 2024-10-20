<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Styles -->
    
</head>

<body>
    <div class="container-fluid" style="margin-top: -7rem">
        <div class="" style="position: absolute; margin-left: 13rem; margin-top:37rem">
            <a href="{{ route('login') }}" class="btn btn-outline-primary px-4 pt-2">Log in</a>
        </div>
        <img id="background" class="bg-img" src="/images/e-banking.svg"/>
    </div>

    <footer class="py-16 text-center text-sm text-dark text-black">
        © 2024 E-Banking System All Rights Reserved.
    </footer>
</body>

</html>
