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
                                <input id="firstName" type="text" class="form-control @error('firstName') is-invalid @enderror" name="firstName" value="{{ old('firstName') }}" required autocomplete="firstName" autofocus>

                                @error('firstName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row justify-content-center">
                            <label for="lastName" class="col-md-4 col-form-label  form-label">{{ __('Cognome') }}</label>

                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName" autofocus>

                                @error('lastName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row justify-content-center">
                            <label for="email" class="col-md-4 col-form-label  form-label">{{ __('Indirizzo E-mail ') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row justify-content-center">
                            <label for="password" class="col-md-4 col-form-label  form-label">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row justify-content-center">
                            <label for="password-confirm" class="col-md-4 col-form-label  form-label">{{ __('Conferma Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- input restaurant name -->
                        <div class="mb-4 row justify-content-center">
                            <label for="name" class="col-md-4 col-form-label  form-label" >Nome ristorante</label>

                            <div class="col-md-6">
                                <input type="text" name="name" id="name" class="form-control ">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
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

                                @error('password')
                                <span class="invalid-feedback" role="alert">
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

                                @error('password')
                                <span class="invalid-feedback" role="alert">
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
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- input restaurant vat num -->
                        <div class="mb-4 row justify-content-center">
                            <label for="vat_num" class="col-md-4 col-form-label  form-label">P.iva ristorante</label>
                            <div class="col-md-6">
                                <input type="file" name="vat_num" id="vat_num" class="form-control">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
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
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        {{-- <label for="name">Nome ristorante</label>
                        <input type="text" name="name" id="name">

                        <br>
                        <br>

                        
                        <label for="adress">Indirizzo ristorante</label>
                        <input type="text" name="adress" id="adress">

                        <br>
                        <br>
                        
                        
                        <label for="logo">Logo ristorante</label>
                        <input type="file" name="logo" id="logo">

                        <br>
                        <br>

                        
                        <label for="wallpaper">Wallpaper ristorante</label>
                        <input type="file" name="wallpaper" id="wallpaper">

                        <br>
                        <br>

                        
                        <label for="vat_num">P.iva ristorante</label>
                        <input type="text" name="vat_num" id="vat_num">
                        
                        <br>
                        <br>

                        
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
                        @endforeach --}}

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
