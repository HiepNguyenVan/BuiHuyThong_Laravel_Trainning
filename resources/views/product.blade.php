@extends('views.master')
<div class="container">
    @foreach ($data as $v)
        {{ $v->name }}
    @endforeach
</div>

{{ $data->links() }}