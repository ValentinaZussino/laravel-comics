@extends('layouts.app')

@section('content')
    {{-- stampa comics --}}
    <ul class="comic-list">
        @foreach ($comics as $item)
        <li>{{$item['title']}}
            <img src="{{$item['thumb']}}" alt="">
        </li> 
        @endforeach
    </ul>
@endsection