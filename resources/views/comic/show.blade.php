@extends('layouts.app')

@section('main')
    <h1 class="text-center">{{$comics->title}}</h1>
    <div>
        <p>
            {{$comics->description}}
        </p>
        <img src="{{ $comics['thumb'] }}" alt="">
    </div>

@endsection
