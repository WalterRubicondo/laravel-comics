@extends('layouts.app')

@section('main')
<main id="single">
    <div class="stripe">
        <img src="{{$comic['thumb']}}" alt="">     
    </div>
    <div class="container pt-6 pb-6">
        <div class="left">
            <h2 class="pb-2">{{$comic['title']}}</h2>
            <div class="description">
                <div class="green">
                    <div class="price">
                        <span>U.S. Price:</span> <span>{{$comic['price']}}</span>
                        <span>AVAILABLE</span>
                    </div>
                    <div class="avaibility">
                        Check Availability <i class="fas fa-caret-down"></i>
                    </div>
                </div>
                <p class="pt-2">{{$comic['description']}}</p>
            </div>
        </div>
        <div class="right">
            <span>ADVERTISEMENT</span>
            <img src="/img/advi.jpg" alt="">
        </div>
    </div>

    <div class="specific pt-3 pb-6">
        <div class="container">
            <div class="left-spec">
                <h4>Talent</h4>
                <div class="art">
                    <div class="col-20">
                        <span>Art by:</span>
                    </div>
                    <div class="col-60">
                        <a> @foreach ($comic['artists'] as $artist)
                               {{$artist}},
                               @endforeach 
                        </a>
                    </div>
                </div>
                <div class="write">
                    <div class="col-20">
                        <span>Written by:</span>
                    </div>
                    <div class="col-60">
                        <a> @foreach ($comic['writers'] as $writer)
                               {{$writer}},
                               @endforeach 
                        </a>
                    </div>
                </div>

            </div>

            <div class="right-spec">
                <h4>Specs</h4>
                <div class="series">
                    <div class="col-20">
                        <span>Series:</span>
                    </div>
                    <div class="col-60">
                        <a href="">{{$comic['series']}}</a>
                    </div>
                </div>
                <div class="price">
                    <div class="col-20">
                        <span>U.S. Price:</span>
                    </div>
                    <div class="col-60">
                        <span>{{$comic['price']}}</span>
                    </div>
                </div>
                <div class="date">
                    <div class="col-20">
                        <span>On Sale Date:</span>
                    </div>
                    <div class="col-60">
                        <span>{{ date('M j, Y', strtotime($comic['sale_date']))}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="merchandise">
        <div class="container">

            <div>
                <span>DIGITAL COMICS</span>
                <img src="/img/grey-comics-digital.png" alt="">
            </div>

            <div>
                 <span>SHOP DC</span>
                 <img src="/img/grey-shop-dc.png" alt="">
            </div>

            <div>
                <span>COMIC SHOP LOCATION</span>
                <img src="/img/grey-shop-location.png" alt="">
            </div>

            <div>
                 <span>SUBSCRIPTION</span>
                 <img src="/img/grey-subscription.png" alt="">
            </div>

        </div>
    </div>
</main>
@endsection