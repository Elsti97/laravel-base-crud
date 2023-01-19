@extends('layouts.app')

@section('main')


<div class="container p-5">

    <h1 class="text-center p-4">Create New Comic</h1>

    <form method="POST" action="{{route('comics.comic')}}">

        @csrf

        <div class="mb-3">
            <label class="form-label">Titolo</label>
            <input name="title" type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Descrizione</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Immagine</label>
            <input name="thumb" type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Prezzo</label>
            <input name="price" type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Serie</label>
            <input name="series" type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Data di uscita</label>
            <input name="sale_date" type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Tipo</label>
            <input name="type" type="text" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Add Comic</button>

    </form>

</div>

@endsection
