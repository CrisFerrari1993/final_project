@extends('layouts.app')

@section('content')

    @if (Auth::check() && Auth::id() === $restaurant->user_id)
        @auth
            <h1>ordini ricevuti</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome e Cognome</th>
                        <th scope="col">Indirizzo</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Dettagli ordine</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (auth()->user()->restaurant->orders as $index => $order)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $order->customer_name}} {{ $order->customer_lastName}}</td>
                        <td>{{ $order->customer_adress }}</td>
                        <td>{{ $order->customer_mail_adress }}</td>
                        <td>{{ $order->customer_phone_number }}</td>
                        {{-- <td>{{ $order->dish_order->name}}</td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endauth
        
    @else
        <h1>Ops... Qualcuno sta provando a fare l'hackerino</h1>
    @endif

@endsection