@extends('layouts.app')

@section('main')
<img src="{{ $comic->thumb }}" alt="">
<h3>
    {{ $comic->title }}
</h3>
<p>
    {{!!$comic->description!!}}
</p>
@endsection