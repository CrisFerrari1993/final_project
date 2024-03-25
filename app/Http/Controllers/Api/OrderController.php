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

        $data = request()->all();

        var_dump($data);

        $order = new Order();

        $order->customer_name = $data['customer_name'];
        $order->customer_lastName = $data['customer_lastName'];
        $order->customer_adress = $data['customer_adress'];
        $order->customer_mail_adress = $data['customer_mail_adress'];
        $order->customer_phone_number = $data['customer_phone_number'];
        $order->restaurant_id = $data['restaurant_id'];

        $order->save;

    }

}