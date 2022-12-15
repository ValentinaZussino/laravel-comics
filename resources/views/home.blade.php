@extends('layouts.app')

@section('content')
    <h1>hello</h1>
    {{-- stampa comics --}}
    <ul>
        @foreach ($comics as $item)
        <li>{{$item['title']}}
            <img src="{{$item['thumb']}}" alt="">
        </li>
            
        @endforeach
    </ul>
@endsection