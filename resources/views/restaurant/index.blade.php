@extends('layouts.app')

@section('content')
    @if (auth()->user()->restaurant)

        <div class="card mb-3" style="border: none">

            <div class="card-body s-card" >
                <div class="row">
                    
                    <div class="col-xs-12 col-sm-10 col-md-10 col-xl-10 d-flex justify-content-around flex-row align-items-center m-auto flex-wrap">

                        {{-- logo del ristorante --}}
                        <div class="col-xs-10 col-sm-10 col-md-3 col-lg-3 col-xl-3">
                            <img class="img-thumbnail" src="{{ asset('storage/' . auth()->user()->restaurant->logo) }}"
                            alt="logo">
                        </div>



                        <div class="col-xs-10 col-sm-10 col-md-5 col-lg-5 col-xl-6">
                            <h1 class="card-title mt-5"><strong>{{ auth()->user()->restaurant->name }}</strong></h1>
                            <h3 class="card-text m-0"><i class="fa-solid fa-location-dot"></i>
                                {{ auth()->user()->restaurant->adress }}</h3>
                            <h4 class="card-text"><i class="fa-solid fa-cash-register"></i> P.IVA
                                {{ auth()->user()->restaurant->vat_num }}</h4>
                            <div>
                                @foreach ($restaurant->categories as $item)
                                    <h4 class="badge rounded-pill bg-dark text-white">{{ $item->name }}</h4>
                                @endforeach
                            </div>
                        </div>

                        
                        <div class="col-xs-10 col-sm-10 col-md-2 col-lg-3 col-xl-3 d-flex flex-column btn-w">

                            {{-- pulsante di visibilita --}}
                            @if (auth()->user()->restaurant->visibility)
                                {{-- se visibility è vero --}}
                                <button class="btn btn-danger mb-2">
                                    <a class="btn_link" href="{{ route('restaurant.edit', $restaurant->id) }}">Prenditi una
                                        pausa</a>
                                </button>
                            @else
                                <button class="btn btn-success mb-2">
                                    <a class="btn_link" href="{{ route('restaurant.edit', $restaurant->id) }}">Torna a
                                        lavoro</a>
                                </button>
                            @endif
                            {{-- pulsante per la pagina con gli ordini --}}
                            <button class="btn btn-primary me-2" style="background-color: #ffc244; border:none;">
                                <a class="btn_link" href="{{ route('order.show', $restaurant->id) }}">
                                    Visualizza gli ordini
                                </a>
                            </button>
                            {{-- <button class="btn btn-primary me-2 position-absolute end-0" style="margin-top: 95px">
                                <a class="btn_link" href="{{ route('restaurant.stats', $restaurant->id) }}">
                                    Statistiche
                                </a>
                            </button> --}}
                        </div>

                    </div>

                </div>
            </div>    

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 160"><path fill="#00a082" fill-opacity="1" d="M0,128L30,133.3C60,139,120,149,180,144C240,139,300,117,360,112C420,107,480,117,540,112C600,107,660,85,720,80C780,75,840,85,900,96C960,107,1020,117,1080,128C1140,139,1200,149,1260,154.7C1320,160,1380,160,1410,160L1440,160L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path></svg>        </div>

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

    .btn-w{
        width: 200px !important;
    }
</style>
