@extends('layouts.app')

@section('content')
    <ul>
        @foreach ($restaurants as $restaurant)
            <li>
                <h4>{{$restaurant->name}}</h4>
                <img src="{{$restaurant->wallpaper}}" alt="">
                
            </li>
        @endforeach
    </ul>
@endsection
