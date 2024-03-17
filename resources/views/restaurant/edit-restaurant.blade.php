@extends('layouts.app')

@section('content')
    <h1>{{$restaurant->name}}</h1>

    
    
    <h3>Questa è la sezione in cui puoi cambiare la visibilità del tuo ristorante</h3>
    <h4>Scegli se essere visibile ai clienti, oppure invisibile</h4>

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
                <button type="submit" class="btn btn-primary">
                    {{ __('Conferma cambiamenti') }}
                </button>
            </div>
        </div>

    </form>

@endsection