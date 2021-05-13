@extends('layouts.app')

@section('main')
<main id="home">
    <div class="current">
        CURRENT SERIES
    </div>
    <div class="container pt-5 pb-5">
        @foreach ($comics as $index => $comic)
        <div class="card pb-4">
            <a href="{{route('detail', ['id' => $index])}}">
                <div class="thumb">
                    <img src="{{$comic['thumb']}}" alt="">
                </div>
                <h5 class="pt-2">{{$comic['series']}}</h5>
            </a>
        </div>
        @endforeach
        <div class="button">
            LOAD MORE
        </div>
    </div>

    <div class="merchandise">
        <div class="container">
            <div class="comics">
                <img src="/img/buy-comics-digital-comics.png" alt="">
                <span>DIGITAL COMICS</span>
            </div>
            <div class="shirt">
                <img src="/img/buy-comics-merchandise.png" alt="">
                <span>DC MERCHANDISE</span>
            </div>
            <div class="sub">
                <img src="/img/buy-comics-subscriptions.png" alt="">
                <span>SUBSCRIPTIONS</span>
            </div>
            <div class="location">
                <img src="/img/buy-comics-shop-locator.png" alt="">
                <span>COMIC SHOP LOCATOR</span>
            </div>
            <div class="visa">
                <img src="/img/buy-dc-power-visa.svg" alt="">
                <span>DC POWER VISA</span>
            </div>
        </div>
    </div>
</main>
@endsection