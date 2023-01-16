@extends('navbar')
@section('content')
    <link rel="stylesheet" href="{{ URL::asset('css/addReminder.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" type="text/css">
    <script src="{{ URL::asset('js/detail.js') }}"></script>
    <script src="{{ URL::asset('js/image.js') }}"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <div class="form-container">
        <form action="/update/{{ $reminder_detail->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <a class="btn back" onclick='history.back()'>
                < Back</a>
                    <div class="edit-container">
                        <h2><input type="text" id="title" name="title" value="{{ $reminder_detail->title }}" onkeypress="show('save_btn')"
                                style="text-align: center">
                        </h2>
                        <div class="picture-bind">
                            <div class="edit-picture">
                                <i class="bi bi-pencil-square" style="font-size: 24px;"></i>
                                <input type="file" id="image" name="image" class="editpic" oninput="show('save_btn')" onchange="read(this)">
                            </div>
                            <img id="img" src="{{asset('asset_image/'.$reminder_detail->image)}}" alt="{{ $reminder_detail->title }}" style="display:block; width:300px; margin:-10px auto 10px auto;">
                        </div>
                        <p>
                            <textarea type="textarea" cols="40" rows="3" id="desc" name="desc" onkeypress="show('save_btn')">{{ $reminder_detail->description }}</textarea>
                        </p>
                    </div>
                    <div class="btn-container">
                        <button type="submit" class="btn btn-primary save" id="save_btn">Save</button>
                    </div>
        </form>
    </div>
@endsection
