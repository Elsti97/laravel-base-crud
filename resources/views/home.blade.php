@extends('layouts.app')

@section('main')
    <div class="width-80-series p-relative">
        <button class="button-blue p-absolute">
            <a href="{{ route('comic.create') }}" class="text-white text-decoration-none">ADD COMIC</a>
        </button>
    </div>

    <div class="black-row">
        <div class="width-80-main wrap mt-3">
            @foreach ($comics as $id => $element)
                <div class="cards d-flex flex-column">
                    <a href="{{ route('comic.show', $element) }}">
                        <div class="mb-3"> <img src="{{ $element['thumb'] }}"></div>
                        <div class="text-white mb-3">{{ $element['title'] }}</div>
                    </a>
                    <div class="d-flex">
                        <a href="{{ route('comic.edit', $element->id) }}">
                            <button class="btn btn-warning btn-sm me-4">
                                MODIFICA
                            </button>
                        </a>
                        <form action="{{ route('comic.destroy', $element->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">
                                ELIMINA
                            </button>
                        </form>
                    </div>

                </div>
            @endforeach

        </div>
        <div class="center">
            <button class="button-blue">LOAD MORE</button>
        </div>
    </div>

    <div class="blue-row">
        <div class="width-80-main">
            <ul>
                <li>
                    <img src="../images/buy-comics-digital-comics.png" alt="dc comics">
                    <span>DIGITAL COMICS</span>
                </li>
                <li>
                    <img src="../images/buy-comics-merchandise.png" alt="dc merch">
                    <span>DC MERCHANDISE</span>
                </li>
                <li>
                    <img src="../images/buy-comics-subscriptions.png" alt="subs">
                    <span>SUBSCRIPTION</span>
                </li>
                <li>
                    <img src="../images/buy-comics-shop-locator.png" alt="comic locations">
                    <span>COMIC SHOP LOCATOR</span>
                </li>
                <li>
                    <img class="payment" src="../images/buy-dc-power-visa.svg" alt="payments">
                    <span>DC POWER VISA</span>
                </li>
            </ul>
        </div>

    </div>
@endsection
