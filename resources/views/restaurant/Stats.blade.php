@extends('layouts.app')

@section('content')

    @if (Auth::check() && Auth::id() === $restaurant->user_id)
        @auth
            
        @endauth
        
    @else
        <h1>Ops... Qualcuno sta provando a fare l'hackerino</h1>
    @endif

@endsection