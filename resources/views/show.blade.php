@extends('layouts.app')

@section('main')
<img src="{{ $single_comic['thumb'] }}" alt="">
<h3>
    {{ $single_comic['title'] }}
</h3>
@endsection