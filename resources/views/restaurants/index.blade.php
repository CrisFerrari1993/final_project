@extends('layouts.app')

@section('content')
    
    <ul>
        @foreach ($restaurants as $restaurant)
            @auth
                @if (auth()->user()-> id == $restaurant->user_id)
                    <li>
                        <h4>{{$restaurant->name}}</h4>
                        <img src="{{$restaurant->wallpaper}}" alt="">
                        <span>{{$restaurant->user->lastName}}</span>
                    </li>
                @endif
            @endauth    
        @endforeach
    </ul>
@endsection
