@extends('navbar')

@section('content')
    <link rel="stylesheet" href="{{ URL::asset('css/addReminder.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" type="text/css">
    <script src="{{ URL::asset('js/image.js') }}"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <div class="form-container">
        <form action="/add" method="POST" enctype="multipart/form-data">
            @csrf
            <h2>New Reminder</h2>
            <div class="input-container">
                <label class="lbl" for="title">Title
                    <input type="text" id="title" name="title">
                </label>
                <label class="lbl" for="desc">Description
                    <textarea type="text" id="desc" name="desc"></textarea>
                </label>
                <label class="lbl" for="image">Image
                    <input type="file" id="image" name="image" onchange="read(this)">
                </label>
                <img src="" alt="" id="img" style="width:300px">
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="btn-container">
                <button type="submit" class="btn btn-primary">Add Reminder</button>
                <a class="btn btn-secondary" onclick='history.back()'>Cancel</a>
            </div>
        </form>
    </div>
@endsection
