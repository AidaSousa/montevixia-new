<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class StripeController extends Controller
{
    public function createCheckoutSession(Request $request)
    {
        // Configurar la clave secreta de Stripe
        Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

        // Crear una nueva sesión de pago
        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [
                [
                    'price' => $request->input('lookup_key'),
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => url('/exito'),
            'cancel_url' => url('/cancelar'),
        ]);

        // Redireccionar a la página de pago de Stripe
        return redirect($session->url);
    }
}