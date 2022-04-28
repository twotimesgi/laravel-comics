@extends('templates.default')

@section('title', 'Home')

@section('content')
    <div class="hero">
        <div class="container">
            <div class="title">CURRENT SERIES</div>
        </div>
    </div>
    <div class="comics-list">
        <div class="container">
                @foreach (config('comics') as $item)
                    <a href="{{ route('comics', ['id' => $item['id']])}}"><div class="item">
                        <img src="{{ $item['thumb'] }}" alt="">
                        <span>{{ $item['series'] }}</span>
                    </div>
                    </a>
                @endforeach
        </div>
        <div class="container">
            <button class="btn btn--full">load more</button>
        </div>
    </div>
    @include('partials.banner')
@endsection