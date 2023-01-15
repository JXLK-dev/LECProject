<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

<div class="list-container">
    <ul class="list-group">
        @foreach ($lists as $key => $list)
            <li class="list-group-item">
                <label class="form-check-label" for="{{ $list->title }}">
                    <div class="checkbox-bind">
                        <input class="form-check-input me-1" type="checkbox" value="{{ $list }}"
                            id="{{ $list->title }}">
                        <a class="detail-link" href="">{{ $list->title }}</a>
                    </div>
                    <div class="list-menu">
                        {{-- <a class="btn" href=""><i class="bi bi-pencil-square"></i></a> --}}
                        <a class="btn del" href="/delete/{{ $list->id }}"><i class="bi bi-trash"></i></a>
                    </div>
                </label>
            </li>
        @endforeach
    </ul>
</div>
