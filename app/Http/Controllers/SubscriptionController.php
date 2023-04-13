<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Asegúrate de importar el Controller correcto

class SubscriptionController extends Controller
{
    public function index()
    {
        return view('subscription.index');
    }

    public function subscribe(Request $request)
    {
        $user = $request->user();
        $paymentMethod = $request->input('payment_method');
        
        $user->createOrGetStripeCustomer();
        
        $user->newSubscription('default', 'price_1MtnSmCNGUc1AmzpWKEPyqYu')->create($paymentMethod, [
            'email' => $user->email,
        ]);
        
        return redirect()->route('dashboard')->with('success', '¡Te has suscrito correctamente!');
    }
}
