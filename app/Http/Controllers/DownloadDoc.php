<?php

namespace App\Http\Controllers;

use App\Mail\DownloadFile;
use App\Mail\OrderPlaced;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Session;
use Mollie\Laravel\Facades\Mollie;
use Z3d0X\FilamentFabricator\Models\Page;

class DownloadDoc extends Controller
{
    public function index()
    {
        return view('pages.checkout');
    }

    public function success()
    {

        $payment_id = session()->get('paymentId');
        // if not start with tr_
        if (strpos($payment_id, 'tr_') !== 0) {
            return redirect()->route('home');
        } else {
            $payment = Mollie::api()->payments->get($payment_id);

            if ($payment->isPaid()) {
                Log::info('Payment received');
                $ord = Order::create([
                    'first_name' => $payment->metadata->first_name,
                    'last_name' => $payment->metadata->last_name,
                    'email' => $payment->metadata->email,
                    'country' => $payment->metadata->country,
                    'city' => $payment->metadata->city,
                    'street' => $payment->metadata->street,
                    'house_number' => $payment->metadata->house_number,
                    'postal_code' => $payment->metadata->postal_code,
                    'company' => $payment->metadata->company,
                    'order_id' => $payment->metadata->order_id,
                    'paid_at' => $payment->paidAt,
                    'transaction_id' => $payment->id,
                    'payment_method' => $payment->method,
                    'payment_status' => $payment->status,
                ]);
                Mail::to(['bart@metamorpha.be', $payment->metadata->email])->send(
                    new OrderPlaced($ord)
                );
                // TODO: Implement the send message method
                Session::forget('paymentId');
                return redirect()->route('inspiratiekaarten')->with('success', 'Uw bestelling is succesvol geplaatst.');
            } else {
                Log::info('Payment not received');
                return redirect()->route('home')->with('error', 'Er is iets misgegaan tijdens het verwerken van uw betaling.');
            }
        }
    }
}
