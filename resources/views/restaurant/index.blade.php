@extends('layouts.app')

@section('content')
@if (auth()->user()->restaurant)
<div class="card mb-3">
    <img class="wallpaper" src="{{asset('storage/' . auth()->user()->restaurant->wallpaper)}}" class="card-img-top" alt="...">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-2 col-md-2 col-xl-2">
                <img class="img-thumbnail" src="{{asset('storage/' . auth()->user()->restaurant->logo)}}" alt="">
            </div>
            <div class="col-sm-10 col-md-10 col-xl-10">
                <h5 class="card-title"><strong>{{auth()->user()->restaurant->name}}</strong></h5>
                <p class="card-text m-0"><i class="fa-solid fa-location-dot"></i> {{auth()->user()->restaurant->adress}}</p>
                <p class="card-text"><i class="fa-solid fa-cash-register"></i> P.IVA{{auth()->user()->restaurant->vat_num}}</p>
                @foreach ($restaurant->categories as $item)
                    <span class="badge rounded-pill bg-{{$item->name === 'Italiano' ? 'primary' : ''}}
                                                       {{$item->name === 'Sushi' ? 'primary' : ''}}
                                                       {{$item->name === 'Etnico' ? 'primary' : ''}}
                                                       {{$item->name === 'Tipico' ? 'primary' : ''}}
                                                       {{$item->name === 'Cinese' ? 'danger' : ''}}
                                                       {{$item->name === 'Kebab' ? 'primary' : ''}}
                                                       {{$item->name === 'Messicano' ? 'success' : ''}}">{{$item->name}}</span>
                @endforeach
            </div>
        </div>
    </div>
  </div>
<div id="jumbotron">
    <img class="wallpaper" src="{{asset('storage/' . auth()->user()->restaurant->wallpaper)}}" alt="">
</div>
<div class=" m-auto d-flex align-items-center restaurant_card p-3 p_custom bg-light">
    <img class="border w-5 logo" src="{{asset('storage/' . auth()->user()->restaurant->logo)}}" alt="">
    <h1 class="mx-4"><strong></strong></h1>
    <div id='resturant_info'>
        <h6><strong>Indirizzo: </strong>{{auth()->user()->restaurant->adress}}</h6>
        <h6><strong>P. iva:</strong> {{auth()->user()->restaurant->vat_num}}</h6>
        
        @foreach ($restaurant->categories as $item)
        <span class="badge bg-primary">{{$item->name}}</span>
        @endforeach
    </div>
</div>
<div class="text-center">
    <button class="btn btn-primary"><a class="text-white" href="{{route('dish.create')}}"> Aggiungi piatto</a></button>
</div>

<div class="container">
    <div class="row">
        @foreach (auth()->user()->restaurant->dishes as $dish)
            <div class="mb-3 col-sm-12 col-md-6 col-xl-3 p-3">
                <div class="card p-2">
                    <img src="{{asset('storage/' . $dish->image)}}" class="fixed-width" alt="{{$dish->name}}">
                <div class="card-body">
                <h5 class="card-title">{{$dish->name}}</h5>
                <p class="card-text">€ {{$dish->price}}</p>
                <div class="d-flex justify-content-between mt-2">
                    <button class="btn btn-primary">
                        <a class="btn_link" href="{{route('dish.edit', $dish->id)}}">
                            <i class="fa-solid fa-pencil"></i>
                            Modifica
                        </a>
                    </button>
                    <form action="{{route('dish.destroy', $dish->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class='btn btn-danger' type="submit"><i class="fa-solid fa-trash-can"></i>Elimina</button>
                    </form>
                </div>
                </div>
                </div>
                
            </div>
        @endforeach
    </div>
@endif
@endsection
