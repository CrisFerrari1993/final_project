@extends('layouts.app')

@section('content')
    @if (auth()->user()->restaurant)
        <div class="card mb-3">

            <div class="card-body s-card">
                <div class="row">

                    <div class="col-sm-2 col-md-2 col-xl-2">
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
                        <button class="btn btn-success me-2 position-absolute end-0 mt-5" >
                            <a class="btn_link" href="{{ route('order.show', $restaurant->id) }}">
                                Visualizza gli ordini
                            </a>
                        </button>

                        <button class="btn btn-primary me-2 position-absolute end-0" style="margin-top: 95px">
                            <a class="btn_link" href="{{ route('restaurant.stats', $restaurant->id) }}">
                                Statistiche
                            </a>
                        </button>


                        <div class="card s-info">
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
        </div>
        <div class="text-center">
            <a class="btn btn-primary" href="{{ route('dish.create') }}">+ Aggiungi piatto</a>
        </div>

        <div class="container">
            <div class="row">
                @foreach (auth()->user()->restaurant->dishes as $dish)
                    <div class="mb-3 col-sm-12 col-md-6 col-xl-3 p-3">
                        <a class="idx_link" href="{{ route('dish.show', $dish->id) }}">
                            <div class="card p-2">
                                <img src="{{ asset('storage/' . $dish->image) }}" class="fixed-width"
                                    alt="{{ $dish->name }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $dish->name }}</h5>
                                    <p class="card-text">€ {{ $dish->price }}</p>
                                    <div class="d-flex mt-2 d-flex align-items-center">
                                        <button class="btn btn-primary me-2">
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
    }

    .s-info {
        background-color: rgba(0, 0, 0, 0.781) !important;
        width: 50%;
        color: white !important;
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
