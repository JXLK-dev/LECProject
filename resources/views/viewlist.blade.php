<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

<div class="list-container">
    <ul class="list-group">
        @php
            $lists = ['contoh1', 'contoh2', 'contoh3']
        @endphp
        @foreach($lists as $key => $list)
            <li class="list-group-item">
                <label class="form-check-label" for="{{ $list }}">
                    <div class="checkbox-bind">
                        <input class="form-check-input me-1" type="checkbox" value="{{ $list }}" id="{{ $list }}">
                        <a class="detail-link" href="" >{{ $list }}</a>
                    </div>
                    <div class="list-menu">
                        {{-- <a class="btn" href=""><i class="bi bi-pencil-square"></i></a> --}}
                        <a class="btn del" href=""><i class="bi bi-trash"></i></a>
                    </div>
                </label>
            </li>
        @endforeach
    </ul>
</div>

