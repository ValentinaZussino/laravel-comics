@extends('layouts.app')

@section('content')
    {{-- jumbo --}}
    <div class="jumbo">
        <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
    </div>
    {{-- stampa comics --}}
    <div class="comic-list">
        @foreach ($comics as $item)
        <div class="vz_card">
            <div class="img_card">
                <img src="{{$item['thumb']}}" alt="">
            </div>
            <div class="text_card">
                <p class="text-white">{{$item['series']}}</p>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center align-content-center">
        <div class="load_button">
            <span class="text-white text-uppercase">load more</span>
        </div>
    </div>
@endsection