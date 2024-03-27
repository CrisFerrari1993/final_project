<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Orders\OrderRequest;
use Braintree\Gateway;
use App\Models\Dish;
use App\Models\Order;
use App\Models\Restaurant;

class OrderController extends Controller
{
    public function show($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        $orders = Order::all();
        return view('restaurant.order', compact('orders', 'restaurant'));
    }


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

        $totalPrice = 0;

        foreach ($dish as $singleDish) {
            $totalPrice += $singleDish->price;
        }

        $result = $gateway->transaction()->sale([
            'amount' => $totalPrice,
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

        // Crea un nuovo ordine con i dati dell'utente
        $order = new Order();
        $order->customer_name = $data['orderData'][0]['customer_name'];
        $order->customer_lastName = $data['orderData'][0]['customer_lastName'];
        $order->customer_adress = $data['orderData'][0]['customer_adress'];
        $order->customer_mail_adress = $data['orderData'][0]['customer_mail_adress'];
        $order->customer_phone_number = $data['orderData'][0]['customer_phone_number'];
        $order->restaurant_id = $data['orderData'][0]['restaurant_id'];

        // Salva l'ordine nel database
        $order->save();

        foreach ($data['takeInfo'] as $takeInfoData) {
            // Aggiungi il piatto all'ordine con le informazioni fornite da takeInfo
            $dish = Dish::find($takeInfoData['id']); // Trova il piatto dal database
            if ($dish) {
                // Aggiungi il piatto all'ordine con la quantità specificata
                $order->dishes()->attach($dish->id, [
                    'name' => $dish->name,
                    'price' => $dish->price,
                    'quantity' => $takeInfoData['quantity'],
                    'dish_id' => $dish->id,
                    'order_id' => $order->id
                ]);
            }
        }

        // Invia una risposta JSON per confermare il successo
        return response()->json(['message' => 'Ordine creato con successo'], 201);
    }


}