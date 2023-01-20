@extends('layouts.app')

@section('main')
<img src="{{ $comic->thumb }}" alt="">
<h3>
    {{ $comic->title }}
</h3>
<p>
    {{!!$comic->description!!}}
</p>

<div>
    <form action="{{route('comics.edit', $elem->id)}}" method="POST">
        @csrf
        @method('EDIT')
        <button class="btn btn-dark" type="submit">
            MODIFICA
        </button>
    </form>
</div>

<div>
    <form action="{{route('comics.destroy', $elem->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-dark" type="submit">
            X
        </button>
    </form>
</div>
@endsection