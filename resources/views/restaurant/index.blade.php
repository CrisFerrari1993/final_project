@extends('layouts.app')

@section('content')
@if (auth()->user()->restaurant)
    <div id="jumbotron">
        <img class="wallpaper" src="{{asset('storage/' . auth()->user()->restaurant->wallpaper)}}" alt="">
    </div>
    <div class=" m-auto d-flex align-items-center restaurant_card p-3 p_custom bg-light">
        <img class="border w-5 logo" src="{{asset('storage/' . auth()->user()->restaurant->logo)}}" alt="">
        <h1 class="mx-4"><strong>{{auth()->user()->restaurant->name}}</strong></h1>
        <div id='resturant_info'>
            <h6><strong>Indirizzo: </strong>{{auth()->user()->restaurant->adress}}</h6>
            <h6><strong>P. iva:</strong> {{auth()->user()->restaurant->vat_num}}</h6>
            @foreach ($restaurant->categories as $item)
            <span class="badge bg-primary">{{$item->name}}</span>
            @endforeach
        </div>
    </div>
    <div class="text-center m-4">
        <button class="btn btn-primary"><a class="text-white" href="{{route('dish.create')}}"> + Add dish</a></button>
    </div>

<div id="jumbotron">
    <img class="wallpaper" src="{{asset('storage/' . auth()->user()->restaurant->wallpaper)}}" alt="">
</div>
<div class=" m-auto d-flex align-items-center restaurant_card p-3 p_custom bg-light">
    <img class="border w-5 logo" src="{{asset('storage/' . auth()->user()->restaurant->logo)}}" alt="">
    <h1 class="mx-4"><strong>{{auth()->user()->restaurant->name}}</strong></h1>
    <div id='resturant_info'>
        <h6><strong>Indirizzo: </strong>{{auth()->user()->restaurant->adress}}</h6>
        <h6><strong>P. iva:</strong> {{auth()->user()->restaurant->vat_num}}</h6>
        
        @foreach ($restaurant->categories as $item)
        <span class="badge bg-primary">{{$item->name}}</span>
        @endforeach
    </div>
</div>
<div class="text-center m-4">
    <button class="btn btn-primary"><a class="text-white" href="{{route('dish.create')}}"> Aggiungi piatto</a></button>
</div>

<div class="container">

    <div class="row">

        @foreach (auth()->user()->restaurant->dishes as $dish)

            <div class="card p-2 col-sm-12 col-md-6 col-xl-3">

                <a class="idx_link text-center" href="{{route('dish.show', $dish->id)}}">
                    <h5>{{$dish->name}}</h5>
                    <img class="w-50" src="{{asset('storage/' . $dish->image)}}" alt="">
                </a>
                <div class="container d-flex mt-2 justify-content-around">
                    <form action="{{route('dish.destroy', $dish->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input class='btn btn-danger' type="submit" value="Elimina">
                    </form>
                    <button class="btn btn-primary">
                        <a class="btn_link" href="{{route('dish.edit', $dish->id)}}">
                            Modifica
                        </a>
                    </button>
                </div>
            </div>

        @endforeach

    </div>

</div>

@endsection
