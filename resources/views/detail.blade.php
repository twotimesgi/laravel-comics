@extends('templates.default')

@section('title', 'Home')

@section('content')
        <div class="hero hero--details">
            <div class="container">
                <div class="title title--details"><img class="thumb" src="{{ $prod['thumb'] }}"></div>
            </div>
        </div>
        <div class="info-top">
            <div class="container">
                <div class="left">
                    <h2>{{ $prod['title']}}</h2>
                    <div class="price-container">
                        <div class="p-left">
                            <div><span class="opacity05">U.S. Price: </span>{{ $prod['price']}}</div>
                            <div><span class="opacity05">AVAILABLE</span></div>
                        </div>
                        <div class="p-right">Check Availability</div>
                    </div>
                    <p>{!! $prod['description'] !!}</p>
                </div>
                <div class="right">
                    <span class="adv">ADVERTISEMENT</span>
                    <img src="{{ asset('assets/adv.jpg') }}">
                </div>
            </div>
        </div>
        <div class="info-bottom">
            <div class="container">

            </div>
        </div>

@endsection