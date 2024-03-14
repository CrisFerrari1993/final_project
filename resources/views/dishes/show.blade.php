@extends('layouts.app')

@section('content')

    <h1>{{$dish ->name}}</h1>

    <img src="{{asset('storage/' . $dish->image)}}" alt="">

    <p>{{$dish ->description}}</p>

    <h3>{{$dish ->price}}</h3>

    @if ($dish ->aviability)
        <h2>disponibile</h2>
    @else
        <h2>non disponibile</h2>
    @endif

    

@endsection


<style>

</style>