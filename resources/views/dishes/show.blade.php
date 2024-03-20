@extends('layouts.app')

@section('content')
<div class="container mt-4">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">Piatto dettagliato</div>
              <div class="card-body">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{asset('storage/' . $dish->image)}}" class="fixed-width" alt="{{$dish->name}}">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"><strong>Nome piatto: </strong>{{$dish->name}}</h5>
                      <p class="card-text"><strong><b>Descrizione: </b></strong><br>{{$dish->description}}</p>
                      <p class="card-text"><strong><b>Prezzo: </b>€ {{$dish->price}}</strong></p>
                      @if ($dish ->aviability)
                        <p class="card-text">In vetrina</p>
                      @else
                        <p class="card-text">Nascosto</p>
                      @endif
                    </div>
                  </div>
                </div> 
                  
              </div>
          </div>
      </div>
  </div>
</div>

@endsection