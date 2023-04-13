<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Asegúrate de importar el Controller correcto
use Laravel\Cashier\Exceptions\IncompletePayment;

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

    

public function cancel(Request $request)
{
    $user = $request->user();

    try {
        $subscription = $user->subscription('default');

        if ($subscription) {
            $subscription->cancel();
            // Puedes agregar más lógica aquí después de cancelar la suscripción, si es necesario
            return redirect()->route('dashboard')->with('success', '¡Se ha cancelado la suscripción correctamente!');
        } else {
            // La suscripción no se encontró, maneja este caso según tu lógica de negocio
            return redirect()->route('dashboard')->with('error', 'No se encontró ninguna suscripción para cancelar.');
        }
    } catch (IncompletePayment $exception) {
        // Maneja excepciones de pagos incompletos, si es necesario
        return redirect()->route('dashboard')->with('error', 'Error al cancelar la suscripción: ' . $exception->getMessage());
    }
}

    

}
