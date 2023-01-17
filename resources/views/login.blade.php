<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</head>

<body>
    <main>
        <div class="card" style="width: 36rem; margin-left: 30rem; margin-top: 12rem">

            <div class="card-header text-center" style="background-color:#62B6B7; color:white">
                LOGIN ACCOUNT
            </div>
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card-body" style="background-color: #97DECE">

                <form action="/login1" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label><br>
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ Cookie::get('emailcookie') }}" placeholder="Input your email" value="">
                    </div><br>
                    <div class="form-group">
                        <label for="password">Password</label><br>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Input your password">
                    </div><br>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Remember Me</label>
                    </div><br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-light" id="submit">Submit</button><br>
                    </div>
                </form>
                <br>
                <p class="card-text text-center">Don't have an account? Click <a href="/register"> here</a></p>
            </div>
        </div>
    </main>
</body>

</html>
