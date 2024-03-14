@extends('layouts.app')

@section('content')
    <h1>Aggiungi un nuovo piatto al tuo menu </h1>
    <form action="" method="POST">

        @csrf
        @method('POST')


        <label for="name">nome del piatto</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="type">Tipo di piatto</label>
        <select name="type" name="type" id="type">
            <option value="antipasto">Antipasto</option>
            <option value="primo">Primo</option>
            <option value="secondo">Secondo</option>
            <option value="contorno">Contorno</option>
            <option value="pizza">Pizza</option>
            <option value="dolce">Dolce</option>
            <option value="beverage">beverage</option>
        </select>
    </form>
@endsection
