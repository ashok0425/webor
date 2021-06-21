<?php

namespace App\Services;

use App\Models\Order;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use PayPalCheckoutSdk\Core\ProductionEnvironment;

class PaypalService
{
    private $client;

    function __construct()
    {
        $environment = new SandboxEnvironment(env('PAYPAL_CLIENT_ID'), env('PAYPAL_SECRET'));
        $this->client = new PayPalHttpClient($environment);
    }

    public function createOrder($orderId)
    {

        $request = new OrdersCreateRequest();
        $request->headers["prefer"] = "return=representation";
        // $request->body = $this->checkoutData($orderId);
        $request->body = $this->simpleCheckoutData($orderId);

        return $this->client->execute($request);
    }

    public function captureOrder($paypalOrderId)
    {
            $request = new OrdersCaptureRequest($paypalOrderId);

            return $this->client->execute($request);
            return redirect()->route('/');
        
    }

    private function simpleCheckoutData($orderId)
    {
        $order = Order::find($orderId);


        return [
            "intent" => "CAPTURE",
            "purchase_units" => [[
                "reference_id" => 'webmall_'. uniqid(),
                "amount" => [
                    "value" => $order->total,
                    "currency_code" => ""
                ]
            ]],
            "application_context" => [
                "cancel_url" => route('paypal.cancel'),
                "return_url" => route('paypal.success', $orderId)
            ]
            ];
    
}


    private function checkoutData($orderId)
    {
        $ord=order::find($orderId);
        $order = DB::table('products')->join('cart','cart.product_id','products.id')->select('products.product_name','products.image_one','cart.*')->where('user_id',Auth::user()->id)->get();
        $ship=DB::table('shipping')->where('order_id',$orderId)->first();
        $tax=DB::table('settings')->first();
        $orderItems = [];

        foreach($order as $item) {

            $orderItems[] = [
                'name' => $item->product_name,
             
                'quantity' =>$item->qty,
                'unit_amount' => [
                    'currency_code' => 'USD',
                    'value' => $item->price
                ],
                'tax' =>
                [
                    'currency_code' => 'USD',
                    'value' => $tax->vat,
                ],
                'category' => 'PHYSICAL_GOODS',

            ];

        }



        $checkoutData = [
            'intent' => 'CAPTURE',
            'application_context' =>
            [
                'return_url' => route('paypal.success', $orderId),
                'cancel_url' => route('paypal.cancel'),
                'brand_name' => 'OceanDryCleaners',
                'locale' => 'en-US',
                'landing_page' => 'BILLING',
                'shipping_preference' => 'SET_PROVIDED_ADDRESS',
                'user_action' => 'PAY_NOW',
            ],
            'purchase_units' => [
                [
                    'reference_id' =>  uniqid(),
                    'items' => count($order),
                    'shipping' =>
                    [
                        // 'method' => '',
                        'name' =>$ship->ship_name,
                        [
                            'full_name' => $ship->ship_name,
                        ],
                        'address' =>
                        [
                            'address_line_1' => $ship->ship_address,
                            // 'address_line_2' => 'Floor 6',
                            'admin_area_2' => $ship->ship_city,
                            // 'admin_area_1' => 'CA',
                            'postal_code' => $ship->zip_code,
                            // 'country_code' => 'US',
                        ],
                    ],
                    'amount' =>
                    [
                        'currency_code' => 'USD',
                        'value' => $ord->total,
                        'breakdown' =>
                        [
                            'item_total' =>
                            [
                                'currency_code' => 'USD',
                                'value' => $ord->subtotal,
                            ],
                            'shipping' =>
                            [
                                'currency_code' => 'USD',
                                'value' => $ord->shipping,
                            ],
                            'handling' =>
                            [
                                'currency_code' => 'USD',
                                'value' => '0',
                            ],
                            'tax_total' =>
                            [
                                'currency_code' => 'USD',
                                'value' => $ord->vat,
                            ],
                            // 'shipping_discount' =>
                            // [
                            //     'currency_code' => 'USD',
                            //     'value' => '0',
                            // ],
                        ],
                    ],
                ]
            ],

        ];

        return $checkoutData;
    }
}
