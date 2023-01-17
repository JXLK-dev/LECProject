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
                EDIT PASSWORD
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
                <form action="/editpassword" method="post" style="border:none;">
                    @csrf
                    <a href="/editprofile" class="btn btn-primary" style="margin-bottom: 50px;">‹ Edit Profile</a>
                    <div class="form-group">
                        <label class="lbl" for="oldpassword">Current Password</label>
                        <input type="password" class="form-control" id="oldpassword" name="oldpassword">
                    </div><br>
                    <div class="form-group">
                        <label class="lbl" for="v">New Password</label>
                        <input type="password" class="form-control" id="newpassword" name="newpassword">
                    </div><br>
                    <div class="btn-container">
                        <button type="submit" class="btn btn-primary">Save</button><br>
                        <a class="btn btn-secondary" href="/home">Cancel</a>
                    </div>
                </form>
                <br>
            </div>
        </div>
@endsection
