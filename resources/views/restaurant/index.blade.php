@extends('layouts.app')

@section('content')
@if (auth()->user()->restaurant)
    <div class="text-center m-4">
        <button class="btn btn-primary"><a class="text-white" href="{{route('dish.create')}}"> + Add dish</a></button>
    </div>
    <ul>
        <!-- delete foreach -->
        @foreach ($restaurants as $restaurant)
            @auth
                @if (auth()->user()->id == $restaurant->user_id)
                    <li>
                        <h4>{{$restaurant->name}}</h4>
                        <strong>Indirizzo ristorante: </strong>
                        <span>{{ $restaurant->adress }}</span>
                        <br>
                        <strong>Partita iva: </strong>
                        <span>{{ $restaurant->vat_num }}</span>
                        <br>
                        <img src="{{$restaurant->wallpaper}}" alt="">
                        <strong>Nome del proprietario</strong>
                        <span>{{$restaurant->user->firstName}}</span>
                        <br>
                        <strong>Cognome del proprietario</strong>
                        <span>{{$restaurant->user->lastName}}</span>
                        <br>
                        <strong>Logo ristorante</strong>
                        <img src="{{ asset('storage/' . $restaurant->logo) }}" alt="logo" style="width: 100px; height: 100px">
                        <br>
                        <strong>Wallpaper ristorante</strong>
                        <img src="{{ asset('storage/' . $restaurant->wallpaper) }}" alt="wallpapaer" style="width: 100px; height:100px;">
                    </li>
                @endif
            @endauth    
        @endforeach
    </ul>
@else
<div class="text-center m-4">
    <button class="btn btn-primary"><a class="text-white" href="{{route('restaurant.create')}}"> + Add restaurant</a></button>
</div>
@endif
@endsection
