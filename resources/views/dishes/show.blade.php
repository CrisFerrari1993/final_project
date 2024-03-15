@extends('layouts.app')

@section('content')

    <div class="container text-center">
        <h1 class="mt-3"><strong>{{$dish ->name}}</strong></h1>

        <img class="show" src="{{asset('storage/' . $dish->image)}}" alt="">

        <p>{{$dish ->description}}</p>

        <h3>€ {{$dish ->price}}</h3>

        @if ($dish ->aviability)
        <h2>Visibile</h2>
        @else
        <h2>Non visibile</h2>
        @endif
    </div>

    

@endsection


<style>

</style>