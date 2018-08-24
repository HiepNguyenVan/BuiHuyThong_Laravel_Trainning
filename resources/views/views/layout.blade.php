@extends('views.master')
@section('title','LAP TRINH ANDROID')
@section('content')
    @for ($i = 0; $i < 10; $i++)
        {!! $i !!}
    @endfor
    {!! "<br />"!!}
    <?php $i = 0; ?>
    @while ($i < 10)
        {!! 'So thu tu : ' .$i .'<br />'!!}
        <?php $i++; ?>
    @endwhile
<br>
    <?php
        $monan  =   ["com","chao","pho","bun"];

        
    ?>

    @foreach ($monan as $v)
        {{$v}}
    @endforeach
@endsection