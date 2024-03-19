@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header">{{ __('Modifica dell\'piatto') }}</div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                            
                                <div class="mb-4 row">
                                    <label class="col-md-4 col-form-label text-md-right" for="name">Nome del piatto</label>

                                    <div class="col-md-6">
                                        <input class="form-control" type="text" name="name" id="name" value="{{$dish->name}}">
                                    </div>
                                    @error('name')
                                        <span class='error'>
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-4 row">
                                    <label class="col-md-4 col-form-label text-md-right" for="img">Immagine prodotto</label>
                                    <img class="img_preview" src="{{asset('storage/' . $dish->image)}}" alt="{{$dish->name}}">
                                    <input class="form-control"  type="file" name="image" id="image" accept="image/png, image/svg">
                                </div>
                                <div class="mb-4 row">
                                    <label class="col-md-4 col-form-label text-md-right" for="description">Descrizione</label>
                                    <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{$dish->description}}</textarea>                                     
                                    @error('description')
                                        <span class='error'>
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-4 row">
                                    <label class="col-md-4 col-form-label text-md-right" for="price">Prezzo</label>
                                    <input class="form-control" type="number" name="price" id="price" value="{{$dish->price}}">
                                    @error('price')
                                        <span class='error'>
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-4 row">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Visibile
                                    <input class="form-check-input mx-1" {{$dish->aviability === 1 ? 'checked' : ''}} type="radio" name="aviability" id="aviability" value="1">
                    
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Non visibile
                                    <input class="form-check-input mx-1" {{$dish->aviability === 0 ? 'checked' : ''}} type="radio" name="aviability" id="aviability" value="0"><br>
                                    @error('aviability')
                                        <span class='error'>
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            
                            <div class="text-center">
                                <input class="btn btn-primary" type="submit" onclick="return confirm('Le modifiche sono corrette?')" value="Modifica">
                            </div>
                        
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
