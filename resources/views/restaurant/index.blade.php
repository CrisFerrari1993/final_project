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

                <div class="card p-2 col-sm-12 col-md-6 col-xl-3">

                    <a class="idx_link text-center" href="{{route('dish.show', $dish ->id)}}">
                        <h5>{{$dish->name}}</h5>
                        <img class="w-50" src="{{asset('storage/' . $dish->image)}}" alt="">
                    </a>
                    <div><a href="">EDIT</a></div>
                        <form action="{{route('dish.destroy', $dish ->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Elimina">
                        </form>
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
