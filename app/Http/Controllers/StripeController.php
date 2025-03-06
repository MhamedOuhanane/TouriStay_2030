<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class StripeController extends Controller
{
    public function checkout()
    {
        $reserve = session('reservation');
        $amountInCents = round($reserve['prix'] * 10);
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $session = Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'gbp',
                        'product_data' => [
                            'name' => 'Send me money!!!'
                        ],
                        'unit_amount' => $amountInCents,
                    ],
                    'quantity' => 1,
                ],
            ],

            'mode' => 'payment',
            'success_url' => route('reservation.store'),
            'cancel_url' => route('reservation.form', $reserve['annonceId'])
        ]);

        return redirect()->away($session->url);
    }
}
