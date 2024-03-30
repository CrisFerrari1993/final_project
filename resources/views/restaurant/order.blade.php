@extends('layouts.app')

@section('content')

    @if (Auth::check() && Auth::id() === $restaurant->user_id)
        @auth

            <!-- titolo pagina -->
            <div class="container mt-5 mb-5">
                <h1 class="text-center">Riepilogo degli ordini ricevuti</h1>
            </div>

            <!-- tabella ordini -->
            <div class="container">
                <table class="table table-striped bg-container ">
                    <thead>
                        <tr>
                            <th scope="col" class="bg-table">#</th>
                            <th scope="col" class="bg-table">Nome e Cognome</th>
                            <th scope="col" class="bg-table">Indirizzo</th>
                            <th scope="col" class="bg-table">Telefono</th>
                            <th scope="col" class="bg-table">Dettagli ordine</th>
                            <th scope="col" class="bg-table">Importo pagato</th>
                        </tr>
                    </thead>
                    <tbody class="bg-container">
                        @foreach (auth()->user()->restaurant->orders as $index => $order)
                            <tr>
                                <th scope="row" class="bg-container">{{ $index + 1 }}</th>
                                <td class="bg-container">{{ $order->customer_name }} {{ $order->customer_lastName }}</td>
                                <td class="bg-container">{{ $order->customer_adress }}</td>
                                <td class="bg-container">{{ $order->customer_phone_number }}</td>
                                <td class="bg-container">
                                    @foreach ($order->dishes as $dish)
                                        {{ $dish->pivot->quantity }}x
                                        {{ $dish->pivot->name }},
                                        <br>
                                    @endforeach
                                </td>
                                @php
                                    $total = 0;
                                @endphp
                                <td class="bg-container">
                                    @foreach ($order->dishes as $dish)
                                        @php
                                            $total += $dish->pivot->price;
                                        @endphp
                                    @endforeach
                                    {{ $total }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>


        @endauth
    @else
        <h1>Ops... Qualcuno sta provando a fare l'hackerino</h1>
    @endif

@endsection

<style>
    body {
        background-color: #e5e5f7;
        opacity: 0.8;
        background-image: radial-gradient(#ffc244 1.5px, #ffffff 1.5px);
        background-size: 30px 30px;
    }

    .bg-container {
        background-color: #e8fffb !important;
        border: 1px solid #00a082 !important;
    }

    .btn-p {
        background-color: #ffc244 !important;
        border: none !important;
    }

    .bg-table{
        background-color: #ffc244 !important;
    }
</style>
