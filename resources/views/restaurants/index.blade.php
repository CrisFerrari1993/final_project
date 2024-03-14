@extends('layouts.app')

@section('content')
<div class="text-center m-4">
    <button class="btn btn-primary"><a class="text-white" href="#"> + Add restaurant</a></button>
</div>
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
