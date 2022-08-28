<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;

class TestStripeController extends Controller
{
    public function index()
    {
        // Make product
        
        // $product =  $stripe->products->create(  [
        //     'name' => 'cos',
        //     'default_price_data' => ['unit_amount' => '10000', 'currency' => 'usd'],
        //     'expand' => ['default_price'],
        // ]);

        // return $product;

        Stripe::setApiKey(config('app.sk_stripe'));
        



    //     // Create a new Customer
        $customer = \Stripe\Customer::create([
        'email' => 'nainmo@ymail.com',
        'description' => 'pembayaran bulan ini harus lunas',
        ]);

    // // Create an Invoice Item with the Price, and Customer you want to charge
    $invoiceItem = \Stripe\InvoiceItem::create([ // You can create an invoice item after the invoice
        'customer' => $customer->id,
        'price' => 'price_1LbhifJac7LdiMKYgRxroWxY',
        ]);
    
    //     // Create an Invoice
        $invoice = \Stripe\Invoice::create([
        'customer' => $customer->id,
        'collection_method' => 'send_invoice',
        'days_until_due' => 7,
        'pending_invoice_items_behavior' => 'include',
        ]);

        $stripe = new \Stripe\StripeClient(config('app.sk_stripe'));

        $stripe->invoices->finalizeInvoice($invoice->id,[]);

         $dta = $stripe->invoices->sendInvoice('in_1Lbi5LJac7LdiMKYKq0oufoS', []);


        return $dta;



          
        return view('testing.stripe');
    }

    function sendInvoice($email) {
        // Look up a customer in your database
        global $CUSTOMERS;
        global $PRICES;
      
        $customerId = null;
      
        $customers = array_filter($CUSTOMERS, function ($customer) use ($email) {
          return $customer['email'] === $email;
        });
      
        if (!$customers) {
          // Create a new Customer
          $customer = \Stripe\Customer::create([
            'email' => $email,
            'description' => 'Customer to invoice',
          ]);
          // Store the Customer ID in your database to use for future purchases
          $CUSTOMERS[] = [
            'stripeId' => $customer->id,
            'email' => $email
          ];
      
          $customerId = $customer->id;
        }
        else {
          // Read the Customer ID from your database
          $customerId = $customers[0]['stripeId'];
        }
      
        // Create an Invoice Item with the Price, and Customer you want to charge
        $invoiceItem = \Stripe\InvoiceItem::create([ // You can create an invoice item after the invoice
          'customer' => $customerId,
          'price' => 'price_123456789',
        ]);
      
        // Create an Invoice
        $invoice = \Stripe\Invoice::create([
          'customer' => $customerId,
          'collection_method' => 'send_invoice',
          'days_until_due' => 30,
          'pending_invoice_items_behavior' => 'include',
        ]);
      
        // Send the Invoice
        $invoice->sendInvoice();
      }

    public function post()
    {




        // This is your test secret API key.
        \Stripe\Stripe::setApiKey('sk_test_51JUgUdI7PA30MRlSUGu8tTozqkKZpo8WR7s3O7AdBDJwMiX7OPenaZ441V9KoWejHWJBIu8XC0Hz9eA2HMCdobqN000XpaPQhr');

        function calculateOrderAmount(array $items): int {
            // Replace this constant with a calculation of the order's amount
            // Calculate the order total on the server to prevent
            // people from directly manipulating the amount on the client
            return 1400;
        }

        header('Content-Type: application/json');

        try {
            // retrieve JSON from POST body
            $jsonStr = file_get_contents('php://input');
            $jsonObj = json_decode($jsonStr);

            // Create a PaymentIntent with amount and currency
            $paymentIntent = \Stripe\PaymentIntent::create([
                'amount' => calculateOrderAmount($jsonObj->items),
                'currency' => 'myr',
                'automatic_payment_methods' => [
                    'enabled' => true,
                ],
            ]);

            $output = [
                'clientSecret' => $paymentIntent->client_secret,
            ];

            echo json_encode($output);
        } catch (\Error $e) {
            http_response_code(500);
            echo json_encode(['error' => $e->getMessage()]);
        }
    }
}
