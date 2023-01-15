@extends('navbar')
@section('content')
    <link rel="stylesheet" href="{{ URL::asset('css/addReminder.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" type="text/css">
    <div class="form-container">
        <form action="/update/{{ $reminder_detail->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <a class="btn back" onclick='history.back()'>
                < Back</a>
                    <div class="edit-container">
                        <h2><input type="text" id="title" name="title" value="{{ $reminder_detail->title }}"
                                style="text-align: center">
                        </h2>
                        <div class="picture-bind">
                            <div class="edit-picture">
                                <i class="bi bi-pencil-square" style="font-size: 24px;"></i>
                                <input type="file" id="image" name="image" class="editpic">
                            </div>
                            <img src="{{asset('asset_image/'.$reminder_detail->image)}}" alt="" style="width:20%">
                        </div>
                        <p>
                            <textarea type="textarea" cols="40" rows="3" id="desc" name="desc">{{ $reminder_detail->description }}</textarea>
                        </p>
                    </div>
                    <div class="btn-container">
                        <button type="submit" class="btn btn-primary hide">Save</button>
                    </div>
        </form>
    </div>
@endsection
