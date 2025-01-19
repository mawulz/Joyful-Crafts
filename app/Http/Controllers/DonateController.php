<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donor;


class DonateController extends Controller
{
    function donate(){
        return view('donate.donate');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name'         => 'required|string|min:1',
            'message'        => 'required|string|min:1',
            'amount' => 'required|string|min:1', // Ubah sementara
            'payment_method'   => 'required|string|min:1',
        ]);

        // Buang titik
        $amount = str_replace(['Rp. ', '.', ','], '', $request->amount);

        // Save
        Donor::create([
            'name'         => $request->name,
            'message'        => $request->message,
            'amount' => $amount,
            'payment_method'   => $request->payment_method
        ]);

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $amount,
            ),

            'donor_details' => array(
                'name' => $request->name,
                'message' => $request->payment_method,
            )
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $request->snap_token = $snapToken;
        $request->save();

        return redirect('/donatur')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
