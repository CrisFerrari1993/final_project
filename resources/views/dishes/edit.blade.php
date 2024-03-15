@extends('layouts.app')

@section('content')

<!-- messaggi di errore in caso di mancata validazione -->
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="container p-5">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xl-12 text-center">
                <label class="d-block mb-2" for="">Nome del piatto</label>
                <input type="text" name="name" id="name" value="{{$dish->name}}">
            </div>
            <div class="col-sm-12 col-md-12 col-xl-12 text-center justify_content_center d-flex flex-column">
                <label class="d-block mb-1" for="">Immagine prodotto</label>
                <img class="img_preview" src="{{asset('storage/' . $dish->image)}}" alt="{{$dish->name}}">
                <input class="m_custom"  type="file" name="image" id="image" accept="image/png">
            </div>
            <div class="col-sm-12 col-md-12 col-xl-12 text-center">
                <label class="d-block mb-2" for="description">Descrizione</label>
                <textarea name="description" id="description" cols="30" rows="10">
                    {{$dish->description}}
                </textarea>
            </div>
            <div class="col-sm-12 col-md-12 col-xl-12 text-center">
                <label class="d-block mb-2" for="price">Prezzo</label>
                <input type="number" name="price" id="price" value="{{$dish->price}}">
            </div>
            <div class="col-sm-12 col-md-12 col-xl-12 text-center">
                <label class="d-block" for="aviability">Visibilità</label>
                    Si<input class="m-3" {{$dish->aviability === 1 ? 'checked' : ''}} type="radio" name="aviability" id="aviability" value="1">
                    No<input class="m-3" {{$dish->aviability === 0 ? 'checked' : ''}} type="radio" name="aviability" id="aviability" value="0">
            </div>
        </div>
        <div class="text-center">
            <input class="btn btn-primary" type="submit" onclick="return confirm('Le modifiche sono corrette?')" value="Modifica">
        </div>
    </div>
</form>
@endsection

<style lang="scss">
.img_preview{
    width: 200px;
    justify-self: center;
    margin: 0 auto;
    margin-bottom: 1rem;
}
.m_custom{
        margin: auto;
    }
</style>