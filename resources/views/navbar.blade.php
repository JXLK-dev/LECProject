<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To-do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link href="{{ URL::asset('css/navbar.css') }}" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
</head>
<nav class="navbar navbar-expand-md">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu"
                aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <img src="{{ URL::asset('asset_image/navbar-logo-cropped.png') }}" alt="">
        </a>
        <div class="collapse navbar-collapse justify-content-between" id="navbarMenu">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/home"><i class="bi bi-list-check"></i> To
                        do List</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ url('search') }}">To do List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('profile') }}">Profile</a>
                </li> --}}
            </ul>
            <div class="d-flex flex-wrap">
                <ul class="navbar-nav">
                    <li>
                        <a class="nav-link" href="/add">
                            <i class="bi bi-plus-circle-fill"></i> Add Reminder
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <ul class="navbar-nav">
            <li>
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="bi bi-person-fill"></i> <span class="user-name">{{ Auth::user()->name }}</span>
                </a>
                <div class="nav-item dropdown">
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="/editprofile">Edit Profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/logout">Log Out</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>

<body>
    @yield('content')
</body>

</html>
