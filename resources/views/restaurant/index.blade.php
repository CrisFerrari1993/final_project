@extends('layouts.app')

@section('content')
@if (auth()->user()->restaurant)
    <img src="{{auth()->user()->restaurant ->wallpaper}}" alt="">
    <h1>{{auth()->user()->restaurant->name}}</h1>
    <div class="text-center m-4">
        <button class="btn btn-primary"><a class="text-white" href="{{route('dish.create')}}"> + Add dish</a></button>
    </div>
    <ul>
        @foreach (auth()->user()->restaurant->dishes as $dish)
            <li>
                <h1>{{$dish->name}}</h1>
                <img src="{{asset('storage/' . $dish->image)}}" alt="">
            </li>
        @endforeach
    </ul>

@else
<div class="text-center m-4">
    <button class="btn btn-primary"><a class="text-white" href="{{route('restaurant.create')}}"> + Add restaurant</a></button>
</div>
@endif
@endsection
