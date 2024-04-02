{{-- form per la creazione di un nuovo piatto --}}

@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <div class="card mb-4 bg-container">
                    <div class="card-header">{{ __('Aggiungi un nuovo piatto al tuo menu') }}</div>
                        <div class="card-body">
                            <form action="{{route('dish.store')}}" id="dishAddForm" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('POST')                               
                                    <div class="mb-4 row">
                                        <label class="col-md-4 col-form-label text-md-right" for="name">Nome del piatto</label>
    
                                        <div class="col-md-6">
                                            <input class="form-control" type="text" name="name" id="name">
                                            <span class="text-danger d-none" id="dishNameError">Inserisci il nome del piatto</span>
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
                                            <span class="text-danger d-none" id="dishDescError">Inserisci la descrizione del piatto</span>
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
                                            <span class="text-danger d-none" id="dishPriceError">Inserisci il prezzo del piatto</span>
                                            <span></span>
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
                                            <span class="text-danger d-none" id="dishVisibilityError">Seleziona la visibilità del piatto</span>
                                            @error('aviability')
                                            <span class='error'>
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        
                                    </div>
                                <div class="text-center">
                                    <input class="btn btn-p" id="dishSub" type="submit" value="Inserisci">
                                </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <script>
        document.getElementById('dishSub').addEventListener('click', function (event) {
         event.preventDefault();


        var name = document.getElementById('name').value;
        var description = document.getElementById('description').value;
        var price = document.getElementById('price').value;
        var visibility = document.querySelector('input[name="visibility"]:checked');

        // Verifica del nome
        if (name.trim() === '') {
            document.getElementById('dishNameError').classList.remove('d-none');
            return;
        }else{
            document.getElementById('dishNameError').classList.add('d-none');
        }


        // Verifica della descrizione
        if (description.trim() === '') {

            document.getElementById('dishDescError').classList.remove('d-none');
            return;
        }else{
            document.getElementById('dishDescError').classList.add('d-none');
        }


        // Verifica della descrizione
        if (price.trim() === '') {

            document.getElementById('dishPriceError').classList.remove('d-none');
            return;
        }else{
            document.getElementById('dishPriceError').classList.add('d-none');
        }


        // Verifica della visibilità
        if (!visibility) {
            document.getElementById('dishVisibilityError').classList.remove('d-none');
            return;
        } else {
            document.getElementById('dishVisibilityError').classList.add('d-none');
        }
            document.getElementById('dishAddForm').submit();
        });
    </script> -->

    <style>

        body{
            background-color: #e5e5f7;
            opacity: 0.8;
            background-image: radial-gradient(#ffc244 1.5px, #ffffff 1.5px);
            background-size: 30px 30px;
        }
        .bg-container{
            background-color: #e9f8f5 !important;
            border: 1px solid #00a082 !important;
        }
        .btn-p{
            background-color: #ffc244 !important;
            border:none !important;
        }

    </style>

@endsection