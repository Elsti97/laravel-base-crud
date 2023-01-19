@extends('layouts.app')
@section('title-page', 'La miglior Pasta - Home')
@section('main')
<h1>La lista della Pasta</h1>
{{-- Tutti i record della tabella pasta --}}
<div>
    <a href="{{route('comics.create')}}">Create Pasta</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">title</th>
            <th scope="col">description</th>
            <th scope="col">type</th>
            <th scope="col">image</th>
            <th scope="col">cooking_time</th>
            <th scope="col">weight</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pastas as $elem)
            <tr>
                <td>{{$elem->id}}</td>
                <td>
                    <a href="{{route('pastas.show', $elem->id )}}">
                        {{$elem->title}}
                    </a>
                </td>
                <td>{!!$elem->description!!}</td>
                <td>{{$elem->type}}</td>
                <td>{{$elem->image}}</td>
                <td>{{$elem->cooking_time}}</td>
                <td>{{$elem->weight}}</td>
            </tr>
        @endforeach

    </tbody>
</table>

    {{ $pastas->links() }}

@endsection
