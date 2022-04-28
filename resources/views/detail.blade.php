@extends('templates.default')

@section('title', $prod['series'])

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
                <div>
                    <h3>Talent</h3>
                    <div class="info">
                        <div class="label">Art by: </div>
                        <div class="data">
                            @foreach($prod['artists'] as $artist)
                            <?php $c = ""?>
                            @if(!$loop->last)
                            <?php $c = ", "?>
                            @endif
                            <a href="#">{{ $artist.$c }}</a>                               
                            @endforeach
                        </div>
                    </div>
                    <div class="info">
                        <div class="label">Written by: </div>
                        <div class="data">
                            @foreach($prod['writers'] as $writer)
                            <?php $c = ""?>
                            @if(!$loop->last)
                            <?php $c = ", "?>
                            @endif
                            <a href="#">{{ $writer.$c }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div>
                    <h3>Specs</h3>
                    <div class="info">
                        <div class="label">Series:</div>
                        <div class="data"><a href="#">{{ $prod['series'] }}</a></div>
                    </div>
                    <div class="info">
                        <div class="label">U.S. Price</div>
                        <div class="data">{{ $prod['price'] }}</div>
                    </div>
                    <div class="info">
                        <div class="label">On Sale Date: </div>
                        <div class="data">{{ $prod['sale_date'] }}</div>
                    </div>
                </div>
            </div>
        </div>
@endsection