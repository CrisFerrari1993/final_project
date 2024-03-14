@extends('layouts.app')

@section('content')
@if (auth()->user()->restaurant)
    <img src="{{auth()->user()->restaurant ->wallpaper}}" alt="">
    <h1>{{auth()->user()->restaurant->name}}</h1>
    <div class="text-center m-4">
        <button class="btn btn-primary"><a class="text-white" href="{{route('dish.create')}}"> + Add dish</a></button>
    </div>
    <div class="container">
        <div class="row">
            @foreach (auth()->user()->restaurant->dishes as $dish)
                <div class="p-2 col-sm-12 col-md-6 col-xl-3">
                    <a class="idx_link" href="">
                        <h5>{{$dish->name}}</h5>
                        <img class="card" src="{{asset('storage/' . $dish->image)}}" alt="">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@else
<div class="text-center m-4">
    <button class="btn btn-primary"><a class="text-white" href="{{route('restaurant.create')}}"> + Add restaurant</a></button>
</div>
@endif
@endsection
