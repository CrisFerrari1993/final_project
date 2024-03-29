@extends('layouts.app')

@section('content')
    @if (auth()->user()->restaurant)
        <div class="card mb-3" style="border: none">

            <div class="card-body s-card" >
                <div class="row">

                    <div class="col-sm-2 col-md-2 col-xl-2 " style="border-radius: 50%;">
                        <img class="img-thumbnail" src="{{ asset('storage/' . auth()->user()->restaurant->logo) }}"
                            alt="logo">
                    </div>

                    <div class="col-sm-10 col-md-10 col-xl-10 position-relative">

                        {{-- pulsante di visibilita --}}
                        @if (auth()->user()->restaurant->visibility)
                            {{-- se visibility è vero --}}
                            <button class="btn btn-danger me-2 position-absolute top-0 end-0">
                                <a class="btn_link" href="{{ route('restaurant.edit', $restaurant->id) }}">Prenditi una
                                    pausa</a> 
                            </button>
                        @else
                            <button class="btn btn-success me-2 position-absolute top-0 end-0">
                                <a class="btn_link" href="{{ route('restaurant.edit', $restaurant->id) }}">Torna a
                                    lavoro</a>
                            </button>
                        @endif


                        {{-- pulsante per la pagina con gli ordini --}}
                        <button class="btn btn-primary me-2 position-absolute end-0 mt-5" style="background-color: #ffc244; border:none;">
                            <a class="btn_link" href="{{ route('order.show', $restaurant->id) }}">
                                Visualizza gli ordini
                            </a>
                        </button>

                        {{-- <button class="btn btn-primary me-2 position-absolute end-0" style="margin-top: 95px">
                            <a class="btn_link" href="{{ route('restaurant.stats', $restaurant->id) }}">
                                Statistiche
                            </a>
                        </button> --}}


                        <div class="s-info">
                            <h3 class="card-title mt-5"><strong>{{ auth()->user()->restaurant->name }}</strong></h3>
                            <p class="card-text m-0"><i class="fa-solid fa-location-dot"></i>
                                {{ auth()->user()->restaurant->adress }}</p>
                            <p class="card-text"><i class="fa-solid fa-cash-register"></i> P.IVA
                                {{ auth()->user()->restaurant->vat_num }}</p>
                            <div>
                                @foreach ($restaurant->categories as $item)
                                    <span class="badge rounded-pill bg-dark text-white">{{ $item->name }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200"><path fill="#00a082" fill-opacity="1" d="M0,96L34.3,96C68.6,96,137,96,206,90.7C274.3,85,343,75,411,85.3C480,96,549,128,617,154.7C685.7,181,754,203,823,186.7C891.4,171,960,117,1029,106.7C1097.1,96,1166,128,1234,122.7C1302.9,117,1371,75,1406,53.3L1440,32L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg> 
        </div>

        <div class="text-center">
            <a class="btn btn-primary" href="{{ route('dish.create') }}" style="background-color: #ffc244; border:none; ">+ Aggiungi piatto</a>
        </div>

        <div class="container">
            <div class="row">
                @foreach (auth()->user()->restaurant->dishes as $dish)
                    <div class="mb-3 col-sm-12 col-md-6 col-xl-3 p-3">
                        <a class="idx_link" href="{{ route('dish.show', $dish->id) }}">
                            <div class="card p-2 cardbg-s">
                                <img src="{{ asset('storage/' . $dish->image) }}" class="fixed-width dish-image"
                                    alt="{{ $dish->name }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $dish->name }}</h5>
                                    <p class="card-text">€ {{ $dish->price }}</p>
                                    <div class="d-flex mt-2 d-flex align-items-center">
                                        <button class="btn btn-primary me-2" style="background-color: 00a082; border:none;">
                                            <a class="btn_link" href="{{ route('dish.edit', $dish->id) }}">
                                                <i class="fa-solid fa-pencil"></i> Modifica
                                            </a>
                                        </button>
                                        {{-- disponibilita del piatto --}}
                                        @if ($dish->aviability)
                                            <span class="bullet"></span>
                                            <span> Disponibile</span>
                                        @else
                                            <span class="bullet unavaible"></span>
                                            <span> Non Disponibile</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
@endsection


<style>

   
    .s-card {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-color: #00a082;
        align-content: center;
    }

    .card-title, .card-text{
        color:white !important;
    }

    .cardbg-s{
        background-color: #ffc244 !important;
        color: white !important;
        border-radius: 20px !important;
        height: 400px !important;
    }

    /* .s-info {
        background-color: rgba(0, 0, 0, 0.781) !important;
        width: 50%;
        color: white !important;
    } */

    .dish-image{
        border-radius: 50%;
        border: none;
    }

    .bullet {
        width: 20px;
        height: 20px;
        border: 1px solid green;
        background-color: green;
        border-radius: 50%;
    }

    .unavaible {
        border-color: red;
        background-color: red;
    }
</style>
