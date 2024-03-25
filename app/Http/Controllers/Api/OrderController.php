<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Orders\OrderRequest;
use Braintree\Gateway;
use App\Models\Dish;
use App\Models\Order;

class OrderController extends Controller
{
    // generazione del token
    public function generate(Request $request, Gateway $gateway)
    {
        $token = $gateway->clientToken()->generate();

        $data = [
            'success' => 'true',
            'token' => $token
        ];

        return response()->json($data, 200);
    }

    public function makePayment(OrderRequest $request, Gateway $gateway)
    {

        $dish = Dish::find($request->dish);

        $result = $gateway->transaction()->sale([
            'amount' => $dish->price,
            'paymentMethodNonce' => $request->token,
            'options' => [
                'submitForSettlement' => true
            ]
        ]);

        if ($result->success) {
            $data = [
                'success' => 'true',
                'message' => "Transazione eseguita con successo"
            ];

            return response()->json($data, 200);
        } else {
            $data = [
                'success' => 'false',
                'message' => "Transazione fallita"
            ];
            return response()->json($data, 401);

        }

    }

    public function newOrder(Request $request)
    {
        // Ottieni i dati inviati nella richiesta
        $data = $request->all();

        dd($data);

        // Crea un nuovo ordine con i dati dell'utente
        $order = new Order();
        $order->customer_name = $data['customer_name'];
        $order->customer_lastName = $data['customer_lastName'];
        $order->customer_address = $data['customer_address'];
        $order->customer_mail_address = $data['customer_mail_address'];
        $order->customer_phone_number = $data['customer_phone_number'];
        $order->restaurant_id = $data['restaurant_id'];

        // Salva l'ordine nel database
        $order->save();

        // Associa i piatti all'ordine
        foreach ($data['userData']['dishes'] as $dishData) {
            $dish = Dish::find($dishData['id']); // Trova il piatto dal database
            if ($dish) {
                // Aggiungi il piatto all'ordine con la quantità specificata
                $order->dishes()->attach($dish->id, ['quantity' => $dishData['quantity']]);
            }
        }

        // Invia una risposta JSON per confermare il successo
        return response()->json(['message' => 'Ordine creato con successo'], 201);
    }


}