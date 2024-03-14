@extends('layouts.app')
@section('content')

    <!--  title -->
    <h1>Create new restaurant</h1>

    <!-- form -->
    <form action="{{ route('restaurant.store') }}" method="POST">

    @csrf
    @method('POST')

    <!-- input restaurant name -->
    <label for="name">Nome ristorante</label>
    <input type="text" name="name" id="name">

    <br>
    <br>

    <!-- input restaurant adress -->
    <label for="adress">Indirizzo ristorante</label>
    <input type="text" name="adress" id="adress">

    <br>
    <br>
    <!-- input restaurant logo -->
    <!-- !!!!! AGGIUNGERE  PASSAGGIO FILE STORAGE !!!!! -->
    <label for="logo">Logo ristorante</label>
    <input type="file" name="logo" id="logo">

    <br>
    <br>

    <!-- input restaurant wallpaper -->
    <!-- !!!!! AGGIUNGERE  PASSAGGIO FILE STORAGE !!!!! -->
    <label for="wallpaper">Wallpaper ristorante</label>
    <input type="file" name="wallpaper" id="wallpaper">

    <br>
    <br>

    <!-- input restaurant vat num -->
    <label for="vat_num">P.iva ristorante</label>
    <input type="text" name="vat_num" id="vat_num">
    
    <br>
    <br>

    <!-- input for choose category -->
    <label for="category">Categoria ristorante</label>
    @foreach ($categories as $category)
        <input
            type="checkbox"
            name="category_id[]"
            id="{{ 'category_id_' . $category->id }}"
            value="{{ $category->id }}"
        >
        <label
            for="{{ 'category_id_' . $category->id }}">
            {{ $category->name }}
        </label>
        <br>
    @endforeach

    <input type="submit" value="Crea nuovo ristorante">

    </form>

@endsection