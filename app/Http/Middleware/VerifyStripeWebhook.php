<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Stripe\Webhook;

class VerifyStripeWebhook
{
    public function handle(Request $request, Closure $next)
    {
        $payload = $request->getContent();
        $signature = $request->header('Stripe-Signature');

        try {
            Webhook::constructEvent($payload, $signature, config('services.stripe.webhook_secret'));
        } catch (\UnexpectedValueException $e) {
            return response()->json(['error' => 'Invalid webhook signature'], 400);
        } catch (\Stripe\Exception\SignatureVerificationException $e) {
            return response()->json(['error' => 'Invalid webhook signature'], 400);
        }

        return $next($request);
    }
}

