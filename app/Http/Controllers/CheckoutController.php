<?php

namespace App\Http\Controllers;
use App\Models\BikeDetail;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rental;
use App\Models\Payment;
use Stripe;
use Illuminate\Support\Facades\DB;
use Auth;

use Illuminate\Support\Facades\Validator;

class CheckoutController extends Controller
{
    //

   
    public function checkout(Request $request,$id)
    {   
        // Enter Your Stripe Secret
        \Stripe\Stripe::setApiKey('sk_test_51J8iBHC5LDWr1mcMUlU5oZ5k3fV6wCITjFdnIFrZWaUesG6W9PgK5Ydi5KzrsxF3ATh97UVSFFk3ZTUo1BU39trp00LaYd0JwK');
    

        
      
    //Para sa price

    $bike_details = BikeDetail::where('id', $id)->get();
    $amount =$request->input('bikeprice');
    foreach($bike_details as $d){
        $amount= $d['bikeprice'];
    }
   /* $total = $request->input('total');
    $amount = $request->$total;
*/
    $amount*=100;
        $payment_intent = \Stripe\PaymentIntent::create([
			'amount' => $amount,
			'currency' => 'PHP',
			'description' => 'Payment From Bike Rental',
			'payment_method_types' => ['card'],
		]);
        //FOR BIKES
		$intent = $payment_intent->client_secret;
		return view('user.checkout.credit-card',compact('intent','bike_details'));
    }

    public function afterPayment(Request $request)
    {
        
      // return $request->input();
    $bike_id = $request->input('bike_id');
 
    $query1= DB::table('rentals')->insertGetId([
        'user_id'=>$request->input('user_id'),
        'bike_id'=>$request->input('bike_id'),
        'rent_start_date'=>$request->input('rent_start_date'),
        'rent_end_date'=>$request->input('rent_end_date'),
        'sub_total'=>$request->input('sub'),
        'total_amount'=>$request->input('total_amount'),
        'fullpayment'=>$request->input('Totxdays'),
        'rentdays'=>$request->input('num_nights'),
        'rent_status'=>$request->input('rent_status'), 
        'remarks'=>$request->input('remarks'), 
       
]);
$rent = $query1;
    //KULANG INSERT PAYMENT
       // echo 'Payment Has been Received';
    $payments = DB::table('payments')->insertGetId([
        'user_id'=>$request->input('user_id'),
        'rental_id'=>$rent,
        'payment_type'=>$request->input('payment_type'),
        'paid_by'=>$request->input('paid_by'),
        'transfee'=>$request->input('transfee'),
        'payment_date' => now(),
        'remarks' => 'pending'
        
]);

$pay = $payments;

$rental = Rental::select('*')
    ->join('bike_details', 'rentals.bike_id', '=', 'bike_details.id')
    ->where('rental_id', '=', $rent)
    ->get();

$pay = Payment::select('*')
    ->where('payment_id', '=', $pay)
    ->get();

        if($request->IsMethod('post')){
        $to = request()->input('personnumber');
        $from = getenv("TWILIO_FROM");
        $message = request()->input('message');
        //open connection

        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERPWD, getenv("TWILIO_SID").':'.getenv("TWILIO_TOKEN"));
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        curl_setopt($ch, CURLOPT_URL, sprintf('https://api.twilio.com/2010-04-01/Accounts/'.getenv("TWILIO_SID").'/Messages.json', getenv("TWILIO_SID")));
        curl_setopt($ch, CURLOPT_POST, 3);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'To='.$to.'&From='.$from.'&Body='.$message);

        // execute post
        $result = curl_exec($ch);
        $result = json_decode($result);

        // close connection
        curl_close($ch);
        //Sending message ends here
        //number 09560963490 is not a valid phone kailangan og +63
        //return[$result];
        }
return view('user.receipt',compact('rental','pay'));
    }
}

 //makatext na


