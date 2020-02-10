<?php

namespace App\Http\Controllers\Front;

use App\Amount;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentsController extends Controller
{

    public function __construct()
    {
        $payment = Amount::get();
        $this->payment = $payment;
    }

    public function index()
    {
        $payments = Amount::get();
        return view('front.payments.index', compact('payments'));
    }

    public function transaction(Request $request)
    {
        //Initial Transaction
        $data = [
            'user_id' => $request->input('user_id'),
            'mobile' => $request->input('mobile'),
            'amount' => ($request->input('amount') / 100.00),
            'pre_token' => $request->input('token')
        ];

        try {
            //before verification for reference purpose
            $payment = $this->payment->create($data);
            $output = $this->verificaiton($payment);

            if ($output) {
                return response()->json([
                    'success' => 'Your Account is successfully credited'
                ], 200);
            }

        } catch (Exception $e) {
            return response()->json([
                'error' => 'something went wrong try again'
            ], 404);
        }

//
//        flash('success', 'success')->important();
//        $cart = request()->cookie('cart');
//        $cart = json_decode($cart, true);
//        return redirect()->route('front.cart')->cookie('cart', json_encode($cart), 30*24*60);*/

    }


    public function verification(Request $request)
    {
        //hit khalti server

        $args = http_build_query(array(
//           'token' => $request->input('trans_token'),
            'token' => $request->input('pre_token'),
            'amount' => ($request->input('amount') * 100)
        ));

        $url = "https://khalti.com/api/v2/payment/verify/";

        //Make the call using API

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $args);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $headers = ['Authorization: Key test_secret_key_25529c7f8a874cedb0a113c6b928b8aa'];

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        //Response

        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);
        return response()->json($response);

        if (isset($token['idx']) && $status_code == 200) {
            $payment = $payment->update(['status' => 1, 'verified_token' => $token['idx']]);

            return true;
        }
        return false;
    }

//        $users = User::all();
//
//        $payment = new Amount();
//        $payment->user_id = $request->user_id;
//        $payment->token = $request->trans_token;
//        $payment->amount = $request->amount;
//        $payment->save();
//
//        flash('success', 'success')->important();
////        $cart = request()->cookie('cart');
////        $cart = json_decode($cart, true);
//        return redirect()->route('front.cart',compact('users'));



    public function verifyTransaction()
    {
        $url = "https://khalti.com/api/v2/merchant-transaction/";

# Make the call using API.
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $headers = ['Authorization: Key test_secret_key_25529c7f8a874cedb0a113c6b928b8aa'];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// Response
        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return response()->json($response);


    }
}
