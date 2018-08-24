@extends('views.master')
@section('title','LAP TRINH PHP')
@section('content')
    <?php 
        $hoten  =   "<b>Khoa hoc php</b>";
        $diem   =   8;

    ?>
       {{$hoten}}
       <br>
       {!! $hoten !!}
       <br>
       @if($diem < 5)
            {!! ' Hoc sinh yeu ' !!}
        @elseif($diem > 5 && $diem < 8)
            {!! 'Hoc sinh kha'!!}
        @else 
            {!! 'Hoc sinh gioi' !!}
        @endif

        <br>

        {{ ($diem > 5) ? 'Kha' : 'Yeu' }}

        <br>

        {{$diem or 'Khong ton tai bien diem'}}
    
@endsection

@section('sidebar')
    <p>hello</p>
    @parent
    
@endsection