@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                {!! $thongtin !!}
            @endforeach
        </ul>
    </div>
@endif