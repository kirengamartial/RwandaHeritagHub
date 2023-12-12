<?php


namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Payment;
use Illuminate\Http\Request;
use Omnipay\Omnipay;

class PaymentController extends Controller
{
    private $gateway;

    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true);
    }

    public function pay(Request $request, $lessonId)
    {
        $request->session()->put('lessonId', $lessonId);
        try {
            $response = $this->gateway->purchase([
                'amount' => $request->amount,
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl' => url("success"),
                'cancelUrl' => url("error"),
            ])->send();

            if ($response->isRedirect()) {
                $response->redirect();
            } else {
                return $response->getMessage();
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

   
    public function success(Request $request) {
        $lessonId = $request->session()->pull('lessonId');
    
        if ($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->gateway->completePurchase([
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId')
            ]);
    
            $response = $transaction->send();
    
            if ($response->isSuccessful()) {
                $arr = $response->getData();
    
                $payment = new Payment();
                $payment->lesson_id = $lessonId;
                $payment->payment_id = $arr['id'];
                $payment->payer_id = $arr['payer']['payer_info']['payer_id'];
                $payment->payer_email = $arr['payer']['payer_info']['email'];
                $payment->amount = $arr['transactions'][0]['amount']['total'];
                $payment->currency = env('PAYPAL_CURRENCY');
                $payment->payment_status = $arr['state'];
    
                $payment->save();
    
                
                return redirect()->route('lessons.show', ['id' => $lessonId]);
            } else {
                return $response->getMessage();
            }
        } else {
            return 'Payment is declined!';
        }
    }

    public function index()
    {
        $Payments = Payment::all();
        $lessons = Lesson::all();

        return view('lessons.index', compact('Payments', 'lessons'));
    }

public function error() 
{
    return "User declined the payment!";
}

}
