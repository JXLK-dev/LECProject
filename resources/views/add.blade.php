@extends('navbar')

@section('content')
    <link rel="stylesheet" href="{{ URL::asset('css/addReminder.css') }}"  type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}"  type="text/css">
    <div class="form-container">
        <form action="/add" method="POST" enctype="multipart/form-data">
            @csrf
            <h2>New Reminder</h2>
            <div class="input-container">
                <label for="title">Title
                    <input type="text" id= "title" name="title">
                </label>
                <label for="desc">Description
                    <input type="text" id= "desc" name="desc">
                </label>
                <label for="image">Image
                    <input type="file" id="image" name="image">
                </label>
            </div>
            <div class="btn-container">
                <button type="submit" class="btn btn-primary">Add Reminder</button>
                <a class="btn btn-secondary" onclick='history.back()'>Cancel</a>
            </div>
        </form>
    </div>
@endsection
