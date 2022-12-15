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
                <p class="text-white">{{$item['title']}}</p>
            </div>
        </div>
        @endforeach
    </div>
@endsection