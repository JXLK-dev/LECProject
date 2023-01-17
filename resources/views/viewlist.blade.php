<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
<script src="{{ URL::asset('js/detail.js') }}"></script>

<div class="list-container">
    <form method="post" action="/check">
        @csrf
        <ul class="list-group">
            @foreach ($lists as $key => $list)
                <li class="list-group-item">
                    <label class="form-check-label" for="{{ $list->title }}">
                        <div class="checkbox-bind">
                            <input class="form-check-input me-1" type="radio" onclick="this.form.submit()" value="{{ $list->id }}" class="check-list" name="reminder" @if($list->checked == 1) checked @endif>
                            {{-- <input class="form-check-input me-1" type="checkbox" value="{{ $list->title }}"
                                id="{{ $list->title }}"> --}}
                            <a class="detail-link" href="/detail/{{ $list->id }}" id="{{ $list->id }}" style="text-decoration:@if($list->checked == 1) line-through @else none @endif">{{ $list->title }}</a>
                        </div>
                        <div class="list-menu">
                            <button class="btn del"><i class="bi bi-trash" onclick="show('popup-{{ $list->id }}')"></i></button>
                            <div class="popup" id="popup-{{ $list->id }}">
                                <div class="center-popup">
                                    <div class="popup-header">
                                        <h5>Delete Reminder?</h5>
                                        <button type="button" class="x" onclick="hide('popup-{{ $list->id }}')">&times;</button>
                                    </div>
                                    <div class="popup-body">
                                        <h6>Delete {{ $list->title }}?</h6>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn" onclick="hide('popup-{{ $list->id }}')">No</button>
                                        <a href="/delete/{{ $list->id }}" class="btn del">Yes</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </label>
                </li>
            @endforeach
        </ul>
    </form>
</div>
