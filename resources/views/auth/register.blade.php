@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        @method('POST')


                        <div class="mb-4 row">
                            <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="firstName" type="text" class="form-control @error('firstName') is-invalid @enderror" name="firstName" value="{{ old('firstName') }}" required autocomplete="firstName" autofocus>

                                @error('firstName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName" autofocus>

                                @error('lastName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

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
                                <label for="logo">Logo ristorante</label>
                                <input type="file" name="logo" id="logo">

                                <br>
                                <br>

                                <!-- input restaurant wallpaper -->
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

                        <div class="mb-4 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="mb-4 row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
