@extends('layouts.app')

@section('content')
    {{-- jumbo --}}
    <div class="jumbo">
        <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
    </div>
    {{-- stampa comics --}}
    <ul class="comic-list">
        @foreach ($comics as $item)
        <li>{{$item['title']}}
            <img src="{{$item['thumb']}}" alt="">
        </li> 
        @endforeach
    </ul>
@endsection