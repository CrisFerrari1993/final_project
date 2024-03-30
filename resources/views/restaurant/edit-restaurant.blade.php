@extends('layouts.app')

@section('content')
    <style>
        h1{
            margin: 15px 0;
        }
        .btn-confirm{
            background-color: rgb(0, 160, 130);
            color: white;
            padding: 10px;
            border: none;
            border-radius: 20px;
        }
        h3{
            margin: 0 30px 20px 30px;
        }
        h4{
            margin: 0 30px 20px 30px;
        }
    </style>

    @if (Auth::check() && Auth::id() === $restaurant->user_id)
        @auth
        <div class="d-flex flex-column align-items-center justify-content-center">
            <h1><strong>{{$restaurant->name}}</strong></h1>

            
            <h3 class="text-center">Questa è la sezione in cui puoi cambiare la visibilità del tuo ristorante</h3>
            <h4 class="text-center">Scegli se essere visibile ai clienti, oppure invisibile</h4>

            <form method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4 row">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Visibile
                    <input class="form-check-input mx-1" {{$restaurant->visibility === 1 ? 'checked' : ''}} type="radio" name="visibility" id="visibility" value="1">

                    <label class="form-check-label" for="flexRadioDefault1">
                        Non Visibile
                    <input class="form-check-input mx-1" {{$restaurant->visibility === 0 ? 'checked' : ''}} type="radio" name="visibility" id="visibility" value="0"><br>
                </div>

                <div class="mb-4 w-100 mb-0">
                    <div>
                        <button type="submit" class="btn-confirm">
                            {{ __('Conferma cambiamenti') }}
                        </button>
                    </div>
                </div>

            </form>
        </div>
        @endauth
        
    @else
        <h1>Ops... Qualcuno sta provando a fare l'hackerino</h1>
    @endif

    <style>

    </style>

@endsection