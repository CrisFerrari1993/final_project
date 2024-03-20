{{-- form per la creazione di un nuovo piatto --}}

@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header">{{ __('Aggiungi un nuovo piatto al tuo menu') }}</div>
                        <div class="card-body">
                            <form action="{{route('dish.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('POST')                               
                                    <div class="mb-4 row">
                                        <label class="col-md-4 col-form-label text-md-right" for="name">Nome del piatto</label>
    
                                        <div class="col-md-6">
                                            <input class="form-control" type="text" name="name" id="name">
                                            @error('name')
                                                <span class='error'>
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-4 row">
                                        <label class="col-md-4 col-form-label text-md-right" for="img">Immagine prodotto</label>
                                        <div class="col-md-6">
                                            <input class="form-control"  type="file" name="image" id="image" accept="image/png">
                                        </div>
                                    </div>
                                    <div class="mb-4 row">
                                        <label class="col-md-4 col-form-label text-md-right" for="description">Descrizione</label>
                                        <div class="col-md-6">
                                            <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>                                          
                                            @error('description')
                                                <span class='error'>
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-4 row">
                                        <label class="col-md-4 col-form-label text-md-right" for="price">Prezzo</label>
                                        <div class="col-md-6">
                                            <input class="form-control" type="number" name="price" id="price">
                                            @error('price')
                                                <span class='error'>
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-4 row">
                                        <label class="col-md-4 col-form-label text-md-right" for="price">Visibilità</label>
                                        <div class="col-md-6">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Visibile
                                            <input class="form-check-input mx-1" type="radio" name="aviability" id="aviability" value="1"><br>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Non visibile
                                            <input class="form-check-input mx-1" type="radio" name="aviability" id="aviability" value="0"><br>
                                            @error('aviability')
                                            <span class='error'>
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        
                                    </div>
                                <div class="text-center">
                                    <input class="btn btn-primary" type="submit" onclick="return confirm('Gli inserimenti sono corretti?')" value="Inserisci">
                                </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection