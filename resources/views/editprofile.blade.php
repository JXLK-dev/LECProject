@extends('navbar')

@section('content')
    <link rel="stylesheet" href="{{ URL::asset('css/addReminder.css') }}"  type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}"  type="text/css">
    <script src="{{ URL::asset('js/detail.js') }}"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    {{-- <div class="form-container">
        <form action="/editprofile }}" method="POST">
            @csrf
            <a class="btn back" href="/home">
                < Back</a>
            <div class="edit-container">
                <label class="lbl" for="name">
                    Name
                    <input type="text" id= "name" name="name" value="{{ Auth::user()->name }}" onkeydown="show('save_btn')">
                </label>
                <label class="lbl" for="email">
                    Email
                    <input type="text" id= "email" name="email" value="{{ Auth::user()->email }}" onkeydown="show('save_btn')">
                </label>
                <label class="lbl" for="gender">
                    Gender
                    <input type="text" id= "gender" name="gender" value="{{ Auth::user()->gender }}" onkeydown="show('save_btn')">
                </label>
            </div>
            <div class="btn-container">
                <button type="submit" class="btn btn-primary save" id="save_btn">Save</button>
            </div>
        </form>
    </div> --}}
        <div class="card" style="width: 36rem; margin: 0px auto 50px auto; border:3px solid #439A97; border-radius:20px">

            <div class="card-header text-center" style="background-color:#62B6B7; color:white; border-radius:16px 16px 0px 0px">
                EDIT PROFILE
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
            <div class="card-body">
                <form action="/editprofile" method="post" style="border:none;">
                    @csrf
                    <a href="/editpassword" class="btn btn-primary" style="margin-left: 68%; margin-bottom: 50px;">Edit Password ›</a>
                    <div class="form-group">
                        <label class="lbl" for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}" onkeydown="show('save_btn')">
                    </div><br>
                    <div class="form-group">
                        <label class="lbl" for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" onkeydown="show('save_btn')">
                    </div><br>
                    <div class="form-group" >
                        <label class="lbl" for="gender">Gender</label><br>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="gender" id="female" value="Female" @if( Auth::user()->gender == 'Female' ) checked @endif onclick="show('save_btn')">
                            <label class="form-check-label" for="gender">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="gender" id="male" value="Male" @if( Auth::user()->gender == 'Male' ) checked @endif onclick="show('save_btn')">
                            <label class="form-check-label" for="gender">Male</label>
                        </div><br>
                    </div>
                    <div class="btn-container">
                        <button type="submit" class="btn btn-primary save" id="save_btn">Save</button><br>
                        <a class="btn btn-secondary" href="/home">Cancel</a>
                    </div>
                </form>
                <br>
            </div>
        </div>
@endsection
