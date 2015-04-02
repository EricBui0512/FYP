<?php
use PayPal\Api\PaymentExecution;

use PayPal\Api\Amount;
use PayPal\Api\CreditCard;
use PayPal\Api\CreditCardToken;
use PayPal\Api\FundingInstrument;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\ExecutePayment;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Details;

class PaymentController extends BaseController {
    
    private $_api_context;

    public function __construct()
    {
        // setup PayPal api context
        $paypal_conf = Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

    // 
    public function postPayment()
	{
	    // echo '123123';exit;
	    $payer = new Payer();
	    $payer->setPaymentMethod('paypal');
	    $total=Input::get('total');
	    $qty=Input::get('qty');
	    $price=Input::get('price');
	    $bill_id=Input::get('bill_id');
	    $item_1 = new Item();
	    $item_1->setName(Input::get('service_name')) // item name
	        ->setCurrency('USD')
	        ->setQuantity($qty)
	        ->setPrice($price); // unit price

	    

	    // add item to list
	    $item_list = new ItemList();
	    $item_list->setItems(array($item_1));

	    $amount = new Amount();
	    $amount->setCurrency('USD')
	        ->setTotal($total);

	    $transaction = new Transaction();
	    $transaction->setAmount($amount)
	        ->setItemList($item_list)
	        ->setDescription('Your transaction description');

	    $redirect_urls = new RedirectUrls();
	    $redirect_urls->setReturnUrl(URL::route('payment.status'))
	        ->setCancelUrl(URL::route('payment.status'));

	    $payment = new Payment();
	    $payment->setIntent('Sale')
	        ->setPayer($payer)
	        ->setRedirectUrls($redirect_urls)
	        ->setTransactions(array($transaction));

	    try {
	        $payment->create($this->_api_context);
	    } catch (\PayPal\Exception\PPConnectionException $ex) {
	        if (\Config::get('app.debug')) {
	            echo "Exception: " . $ex->getMessage() . PHP_EOL;
	            $err_data = json_decode($ex->getData(), true);
	            exit;
	        } else {
	            die('Some error occur, sorry for inconvenient');
	        }
	    }

	    foreach($payment->getLinks() as $link) {
	        if($link->getRel() == 'approval_url') {
	            $redirect_url = $link->getHref();
	            break;
	        }
	    }

	    // add payment ID to session
	    Session::put('paypal_payment_id', $payment->getId());
	    Session::put('bill_id',$bill_id );
	    if(isset($redirect_url)) {
	        // redirect to paypal
	        return Redirect::away($redirect_url);
	    }

	    return Redirect::route('original.route')
	        ->with('error', 'Unknown error occurred');
	}
    // 
    public function getPaymentStatus()
	{
	    // Get the payment ID before session clear
	    $payment_id = Session::get('paypal_payment_id');
	    $bill_id= Session::get('bill_id');
	    // clear the session payment ID
	    Session::forget('paypal_payment_id');
	    Session::forget('bill_id');

	    if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
	        return Redirect::route('original.route')
	            ->with('error', 'Payment failed');
	    }

	    $payment = Payment::get($payment_id, $this->_api_context);

	    // PaymentExecution object includes information necessary 
	    // to execute a PayPal account payment. 
	    // The payer_id is added to the request query parameters
	    // when the user is redirected from paypal back to your site
	    $execution = new PaymentExecution();
	    $execution->setPayerId(Input::get('PayerID'));

	    //Execute the payment
	    $result = $payment->execute($execution, $this->_api_context);

	    // echo '<pre>';print_r($result);echo '</pre>';exit; // DEBUG RESULT, remove it later
 
	    if ($result->getState() == 'approved') { // payment made
	    	$Bill= DealTransaction::find($bill_id);
	    	$Bill->payment_status=1;
	    	$Bill->status=1;
	    	$Bill->payment_id=$payment_id;
	    	$Bill->save();
	    	echo '<center><h1>PAID SUCCESSFULLY!!!</h1><center><p>Please wait while we redirecting to homepage</p></center></center><script>setTimeout(function(){ location.href="/../"; }, 3000);</script>';die;
	    }
	    //return Redirect::route('original.route');
	        echo '<center><h1>PAID FAILED!!!</h1></center><center><p>Please wait while we redirecting to homepage</p></center><script>setTimeout(function(){ location.href="/../"; }, 3000);</script>';die;
	}
}

