<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Exception\ApiErrorException;
use Stripe\Webhook;

class PaymentController extends Controller
{
    public function paymentCreate(Request $request)
    {
        $amount = $request->input('amount');
        $paymentFor = $request->input('paymentFor');
        $eventId = $request->input('event_id');
        $user = $request->user();

        try{
            $charge = Charge::create([
                'amount' => $amount * 100,
                'currency' => 'EUR',
                'source' => $request->input('stripeToken'),
                'description' => 'Pago para ' . $paymentFor,
            ]);

            $payment = new Payment([
                'amount' => $amount,
                'payment_for' => $paymentFor,
                'event_id' => $eventId,
            ]);

            $user->payments()->save($payment);

            return redirect()->route('payments.success', ['id' => $payment->id]);
        } catch (ApiErrorException $e) {
            return redirect()->route('payments.cancel');
        }
    }

    public function paymentSuccess($id) {

        $payment = Payment::findOrFail($id);
        $payment->status = 'success';
        $payment->save();

        return view('payments.success');
    }

    public function paymentCancel() {

        return view('payments.cancel');
    }

    public function paymentWebhook(Request $request) {

        $payload = $request->getContent();
        $sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];
        $event = null;

        try{
            $event = Webhook::constructEvent($payload, $sig_header, env('STRIPE_WEBHOOK_SECRET'));
        } catch(\UnexpectedValueException $e){
            return response()->json(['error' => $e->getMessage()], 400);
        } catch(\Stripe\Exception\SignatureVerificationException $e){
            return response()->json(['error' => $e->getMessage()], 400);
        }

        if($event->type === 'charge.succeeded') {
            $payment = Payment::where('charge_id', $event->data->object->id)->firstOrFail();
            $payment->status = 'success';
            $payment->save();
        }

        return response()->json(['success' => true]);
    }
}
