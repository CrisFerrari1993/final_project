@extends('layouts.app')

@section('content')
    @if (Auth::check() && Auth::id() === $dish->restaurant->user_id)
        @auth
            <div class="container mt-4">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card mb-4 bg-container">
                            <div class="card-header bg-container">{{ __('Modifica dell\'piatto') }}</div>

                            <div class="card-body">
                                <form method="POST" id="dishEditForm" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')


                                    <div class="mb-4 row">
                                        <label class="col-md-4 col-form-label text-md-right" for="name">Nome del
                                            piatto</label>

                                        <div class="col-md-6">
                                            <input class="form-control bg-container" type="text" name="name" id="editName"
                                                value="{{ $dish->name }}">
                                            <span class="text-danger d-none" id="editNameError">Inserisci nome del piatto</span>
                                        </div>
                                        @error('name')
                                            <span class='error'>
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-4 row">
                                        <label class="col-md-4 col-form-label text-md-right" for="img">Immagine
                                            prodotto</label>

                                        <input class="form-control bg-container" type="file" name="image" id="editImage"
                                            accept="image/png, image/svg">
                                    </div>
                                    <div class="mb-4 row">
                                        <label class="col-md-4 col-form-label text-md-right"
                                            for="description">Descrizione</label>
                                        <textarea class="form-control bg-container" name="description" id="editDescription" cols="30" rows="10">{{ $dish->description }}</textarea>
                                        <span class="text-danger d-none" id="editDescError">Inserisci la descrizione del
                                            piatto</span>
                                        @error('description')
                                            <span class='error'>
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-4 row">
                                        <label class="col-md-4 col-form-label text-md-right" for="price">Prezzo in
                                            euro</label>
                                        <input class="form-control bg-container" type="number" name="price" id="editPrice"
                                            value="{{ $dish->price }}">
                                        <span class="text-danger d-none" id="editPriceError">Inserisci il prezzo del
                                            piatto</span>
                                        @error('price')
                                            <span class='error'>
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-4 row">Modifica disponibilità del prodotto
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Disponibile
                                            <input class="form-check-input mx-1" {{ $dish->aviability === 1 ? 'checked' : '' }}
                                                type="radio" name="aviability" id="aviability" value="1">

                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Non Disponibile
                                                <input class="form-check-input mx-1"
                                                    {{ $dish->aviability === 0 ? 'checked' : '' }} type="radio"
                                                    name="aviability" id="aviability" value="0"><br>
                                                @error('aviability')
                                                    <span class='error'>
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                    </div>

                                    <div class="text-center">
                                        <input class="btn btn-p text-white" type="submit" id="editSub" value="Modifica">
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endauth
    @else
        <h1>Ops... Qualcuno sta provando a fare l'hackerino</h1>
    @endif

    <!-- <script>
        document.getElementById('editSub').addEventListener('click', function(event) {
            event.preventDefault();


            var name = document.getElementById('editName').value;
            var description = document.getElementById('editDescription').value;
            var price = document.getElementById('editPrice').value;
            var visibility = document.querySelector('input[name="visibility"]:checked');

            // Verifica del nome
            if (name.trim() === '') {
                document.getElementById('editNameError').classList.remove('d-none');
                return;
            } else {
                document.getElementById('editNameError').classList.add('d-none');
            }


            // Verifica della descrizione
            if (description.trim() === '') {

                document.getElementById('editDescError').classList.remove('d-none');
                return;
            } else {
                document.getElementById('editDescError').classList.add('d-none');
            }


            // Verifica della descrizione
            if (price.trim() === '') {

                document.getElementById('editPriceError').classList.remove('d-none');
                return;
            } else {
                document.getElementById('editPriceError').classList.add('d-none');
            }


            // Verifica della visibilità
            if (!visibility) {
                document.getElementById('dishVisibilityError').classList.remove('d-none');
                return;
            } else {
                document.getElementById('dishVisibilityError').classList.add('d-none');
            }
            document.getElementById('dishEditForm').submit();
        });
    </script>
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
