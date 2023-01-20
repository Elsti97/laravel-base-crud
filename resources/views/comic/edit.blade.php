@extends('layouts.app')

@section('main')


<div class="container p-5">

    <h1 class="text-center p-4">Modifica Comic</h1>

    <form method="POST" action="{{route('comic.update', $comic->id)}}">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Titolo</label>
            <input value="{{$comic->title}}" name="title" type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Descrizione</label>
            <textarea name="description" class="form-control">{{$comic->description}}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Immagine</label>
            <input value="{{$comic->thumb}}" name="thumb" type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Prezzo</label>
            <input value="{{$comic->price}}" name="price" type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Serie</label>
            <input value="{{$comic->series}}" name="series" type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Data di uscita</label>
            <input value="{{$comic->sale_date}}" name="sale_date" type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Tipo</label>
            <input value="{{$comic->type}}" name="type" type="text" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Modifica Comic</button>

    </form>

</div>

@endsection
