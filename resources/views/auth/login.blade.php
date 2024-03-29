@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-container">{{ __('Login') }}</div>

                <div class="card-body bg-container">
                    
                    <form method="POST" id="formLog" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4 row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo e-mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control bg-container" name="email">
                                <span class="text-danger d-none" id="emailError">Inserisci email</span>
                                @error('email')
                                <span class="error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control bg-container" name="password">
                                <span class="text-danger d-none" id="passwordError">Inserisci password</span>
                                @error('password')
                                <span class="error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                                

                        </div>

                        <div class="mb-4 row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Ricordami') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4 row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" id="subLog" class="btn btn-primary btn-p">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link a-style" href="{{ route('password.request') }}">
                                    {{ __('Hai dimenticato la password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>


    document.getElementById('subLog').addEventListener('click', function (event) {
 
        console.log('ciao')
        event.preventDefault();


        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
    
        // Verifica del nome
        if (email.trim() === '') {
            document.getElementById('emailError').classList.remove('d-none');
            return;
        }else{
            document.getElementById('emailError').classList.add('d-none');
        }


        // Verifica dell'email
        if (password.trim() === '') {
  
            document.getElementById('passwordError').classList.remove('d-none');
            return;
        }else{
            document.getElementById('passwordError').classList.add('d-none');
        }


        document.getElementById('formLog').submit();
    });
</script>
@endsection

<style scoped>
    body{
        background-color: #ffffff;
        opacity: 0.8;
        background-image:  radial-gradient(#ffc244 1.3px, transparent 1.3px), radial-gradient(#ffc244 1.3px, #ffffff 1.3px);
        background-size: 52px 52px;
        background-position: 0 0,26px 26px;
    }
    .bg-container{
        background-color: #e9f8f5 !important;
        border: 1px solid #00a082 !important;
    }

    .btn-p{
        background-color: #ffc244 !important;
        border:none !important;
    }
    .a-style{
        color: #00a082 !important;
    }
</style>