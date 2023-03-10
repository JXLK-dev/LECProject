<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TickAll</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</head>

<body style="text-align:center">
    {{-- <h1 style="text-align: center; margin-top:40px">To Do List</h1> --}}
    <img src="{{ URL::asset('asset_image/logo.png') }}" alt="Tick All Logo">
    @auth
        <div style="text-align: center;">
            <a href="/logout" class="btn btn-light" style="margin: 0px 20px 0px 20px">Logout</a>
        </div>
    @else
        <div style="text-align:center">
            <img id="logo" src="{{ asset('storage/asset_image/logo.png') }}" alt="">
        </div>
        <div style="text-align: center;">
            <a href="/login" class="btn btn-light" style="margin: 0px 20px 0px 20px">Login</a>
            <a href="/register" class="btn btn-light" style="margin: 0px 20px 0px 20px">Sign Up</a>
        </div>
    @endauth
</body>

</html>
