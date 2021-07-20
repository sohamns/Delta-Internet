<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

class PaymentController extends Controller
{    
    public function order(Request $request)
    {
        $api = new Api(env('API_KEY'), env('API_SECRET'));
        
        $order = $api->order->create(array(
                'amount' => $request->amount * 100,
                'currency' => 'INR'
            )
        );

        $payment_db = new Payment;

        $payment_db->amount = $request->amount;
        $payment_db->order_id = $order->id;
        
        $payment_db->save();

        $payment = array(
            'order_id' => $order->id,
            'amount' => $order->amount
        );
        
        return redirect()->route('checkout')->with('payment', $payment);
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function verify(Request $request)
    {
        $api = new Api(env('API_KEY'), env('API_SECRET'));

        $razorpay_payment_id = $request->razorpay_payment_id;
        $razorpay_order_id = $request->razorpay_order_id;
        $razorpay_signature = $request->razorpay_signature;

        $payment_db = Payment::where('order_id', $razorpay_order_id)->first();
        $payment_db->success = true;
        $payment_db->razorpay_payment_id = $razorpay_payment_id;

        try {
            $attributes  = [
                'razorpay_signature'  => $razorpay_signature, 
                'razorpay_payment_id'  => $razorpay_payment_id, 
                'razorpay_order_id' => $razorpay_order_id
            ];
     
            $order  = $api->utility->verifyPaymentSignature($attributes);
            
            $success = true;
        }
        catch (SignatureVerificationError $e) {
            $success = false;
        }
        
        if ($success) {
            $payment_db->save();
            return redirect()->route('success');
        } else {
            return redirect()->route('error');
        }
    }

    public function success()
    {
        return view('success');
    }

    public function error()
    {
        return view('error');
    }
}
