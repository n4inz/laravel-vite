<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StripeController extends Controller
{
    public function webhook(Request $request)
    {
        // \Stripe\Stripe::setApiKey('sk_test_51Lbgv4Jac7LdiMKYbai9U1voRotfjK09AoULdLIMaU7UXBZF1rlT6BOhx7c49Ri5QmGv8z33q8icPHk62DiUQuIi00PBop7B2M');
        $endpoint_secret = config('app.stripe_webhook_secret');
        $event = null;
        $payload = json_decode($request->getContent(), true);
        try {
            $event = \Stripe\Event::constructFrom(
                $payload
            );
           
        } catch(\UnexpectedValueException $e) {
            // Invalid payload
           
            Log::debug(' Webhook error while parsing basic request');
            http_response_code(400);
            exit();
        }

        if ($endpoint_secret) {
            // Only verify the event if there is an endpoint secret defined
            // Otherwise use the basic decoded event
            $sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];
            try {
              $event = \Stripe\Webhook::constructEvent(
                $request->getContent(), $sig_header, $endpoint_secret
              );
              Log::debug($event->type);
            } catch(\Stripe\Exception\SignatureVerificationException $e) {
             
              Log::debug($e);
              http_response_code(400);
              exit();
            }
        }

        // Handle the event
        switch ($event->type) {
            case 'invoice.paid':
                $invoice = $event->data->object; // contains a \Stripe\PaymentIntent
                Log::debug($invoice);
            break;
            case 'invoice.payment_succeeded':
                $paymentMethod = $event->data->object; 
                Log::debug($paymentMethod->id);
                Payment::create([
                   'stripe_id' => $paymentMethod->id,
                   'total' => $paymentMethod->amount_paid,
                   'customer' => $paymentMethod->customer,
                   'status' => $paymentMethod->status,
                   'users_id' => 1,
                ]);

                Invoice::where('id_costumer' , $paymentMethod->customer)->update([
                    'status' => "PAID"
                ]);
                Log::debug($paymentMethod);
            
            break;

            default:
            // Unexpected event type
            error_log('Received unknown event type');
        }
    }
}
