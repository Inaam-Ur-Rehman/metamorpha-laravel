<?php

namespace App\Http\Controllers;

use App\Mail\DownloadFile;
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
                // dd($payment->metadata);
                Mail::to("test@gmail.com")->send(new DownloadFile);
                Session::forget('paymentId');
                return redirect()->route('inspiratiekaarten')->with('success', 'Bedankt voor uw bestelling! U ontvangt een email met de download link.');
            } else {
                Log::info('Payment not received');
                return redirect()->route('home')->with('error', 'Er is iets misgegaan tijdens het verwerken van uw betaling.');
            }
        }
    }
}
