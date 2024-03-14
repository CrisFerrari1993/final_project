{{-- form per la creazione di un nuovo piatto --}}

@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center align-items-center col-12 flex-column">

        <h1>Aggiungi un nuovo piatto al tuo menu </h1>

        <form action="{{route('dish.store')}}" method="POST" class="d-flex flex-column col-6 justify-content-center align-items-center" enctype="multipart/form-data">

            @csrf
            @method('POST')

            <label for="name">nome del piatto</label>
            <input type="text" name="name" id="name">
            
            <label for="description">Descrizione del piatto e ingredienti</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>

            <label for="image">Aggiungi un'immagine al piatto</label>
            <input type="file" name="image" id="image">

            <label for="price">Prezzo</label>
            <input type="number" name="price" id="price">

            <label for="aviability">Disponibilità attuale</label>
            <div class="container d-flex justify-content-center">
                <label for="aviability">Si</label>
                <input class="m-2" type="radio" name="aviability" id="aviability" value="1">
                <label for="aviability">No</label>
                <input class="m-2" type="radio" name="aviability" id="aviability" value="0">
            </div>
            
            <input type="submit" value="Crea">
        </form>
    </div>
@endsection


<style>

</style>