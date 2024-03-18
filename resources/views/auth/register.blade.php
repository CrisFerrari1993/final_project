@extends('layouts.app')

@section('content')
<div class="container mt-4 mb-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrati') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        @method('POST')


                        <div class="mb-4 row justify-content-center">
                            <label for="firstName" class="col-md-4 col-form-label  form-label">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="firstName" type="text" class="form-control" name="firstName" value="{{ old('firstName') }}">

                                @error('firstName')
                                    <span class='error'>
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row justify-content-center">
                            <label for="lastName" class="col-md-4 col-form-label  form-label">{{ __('Cognome') }}</label>

                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control" name="lastName" value="{{ old('lastName') }}">

                                @error('lastName')
                                    <span class='error'>
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row justify-content-center">
                            <label for="email" class="col-md-4 col-form-label  form-label">{{ __('Indirizzo E-mail ') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @error('email')
                                    <span class='error'>
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row justify-content-center">
                            <label for="password" class="col-md-4 col-form-label  form-label">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">
                                @error('password')
                                    <span class='error'>
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row justify-content-center">
                            <label for="password-confirm" class="col-md-4 col-form-label  form-label">{{ __('Conferma Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>
                        <!-- input restaurant name -->
                        <div class="mb-4 row justify-content-center">
                            <label for="name" class="col-md-4 col-form-label  form-label" >Nome ristorante</label>

                            <div class="col-md-6">
                                <input type="text" name="name" id="name" class="form-control ">
                                @error('name')
                                    <span class='error'>
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <!-- input restaurant adress -->
                        <div class="mb-4 row justify-content-center">
                            <label for="adress" class="col-md-4 col-form-label  form-label">Indirizzo ristorante</label>

                            <div class="col-md-6">
                                <input type="text" name="adress" id="adress" class="form-control">
                                @error('adress')
                                    <span class='error'>
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- input restaurant logo -->
                        <div class="mb-4 row justify-content-center">
                            <label for="logo" class="col-md-4 col-form-label  form-label">Logo ristorante</label>

                            <div class="col-md-6">
                                <input type="file" name="logo" id="logo" class="form-control">
                                @error('logo')
                                    <span class='error'>
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- input restaurant wallpaper -->
                        <div class="mb-4 row justify-content-center">
                            <label for="wallpaper" class="col-md-4 col-form-label  form-label">Wallpaper ristorante</label>
                            <div class="col-md-6">
                                <input type="file" name="wallpaper" id="wallpaper" class="form-control">
                                @error('wallpaper')
                                    <span class='error'>
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- input restaurant vat num -->
                        <div class="mb-4 row justify-content-center">
                            <label for="vat_num" class="col-md-4 col-form-label  form-label">P.iva ristorante</label>
                            <div class="col-md-6">
                                <input type="number" name="vat_num" id="vat_num" class="form-control">
                                @error('vat_num')
                                    <span class='error'>
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <!-- input for choose category -->
                        <div class="mb-4 row  justify-content-center">
                            <label for="category" class="col-md-4 col-form-label  form-label d-flex align-items-center">Categoria ristorante</label>
                            <div class="col-md-6 d-flex justify-content-around flex-wrap p-1" style="min-height: 100px; gap: 5px;border: 1px solid #dee2e6; border-radius: 10px">
                                @foreach ($categories as $category)
                                    <div style="margin:5px">
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
                                    </div>
                                @endforeach
                                @error('category_id')
                                    <span class='error'>
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- input for visibility --}}
                        <div class="mb-4 row justify-content-center">
                            <label class="col-md-4 col-form-label" for="visibility">Visibilità</label>
                            <div class="col-md-6">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Visibile
                                <input class="form-check-input mx-1" type="radio" name="visibility" id="visibility" value="1"><br>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Non visibile
                                <input class="form-check-input mx-1" type="radio" name="visibility" id="visibility" value="0"><br>
                                @error('visibility')
                                    <span class='error'>
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-4 w-100 mb-0">
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrati') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
