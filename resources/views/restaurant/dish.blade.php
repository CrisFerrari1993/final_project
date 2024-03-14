{{-- form per la creazione di un nuovo piatto --}}

@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center align-items-center col-12 flex-column">

        <h1>Aggiungi un nuovo piatto al tuo menu </h1>

        <form action="" method="POST" class="d-flex flex-column col-6 justify-content-center align-items-center">


            @csrf
            @method('POST')

            <label for="name">nome del piatto</label>
            <input type="text" name="name" id="name">
            
            <label for="type">Tipo di piatto</label>
            <select name="type" name="type" id="type">
                <option value="antipasto">Antipasto</option>
                <option value="primo">Primo</option>
                <option value="secondo">Secondo</option>
                <option value="contorno">Contorno</option>
                <option value="pizza">Pizza</option>
                <option value="dolce">Dolce</option>
                <option value="beverage">Beverage</option>
            </select>
            
            <label for="description">Descrizione del piatto e ingredienti</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>

            <label for="image">Aggiungi un'immagine al piatto</label>
            <input type="file" name="image" id="image">

            <label for="price">Prezzo</label>
            <input type="number" name="price" id="price">

            <label for="aviability">Disponibilità attuale</label>
            <input type="radio" name="aviability" id="aviability">Si
            <input type="radio" name="aviability" id="aviability">No
            
            <input type="submit" value="Crea">
        </form>
    </div>
@endsection


<style>

</style>