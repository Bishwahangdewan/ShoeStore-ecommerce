<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    

    public function payment(){

        $user_id = Auth::id();

        //get user loacation
        $address = DB::table('locations')->where('userid','=',$user_id)->get(); 

        $cart = DB::select('SELECT * FROM cart WHERE userid =?',[$user_id]);

        //get product id from user cart
        $products = [];
        foreach($cart as $eachcart){
            array_push($products,$eachcart->item_id);
        }
        //get product infos
        $items=[];
        foreach($products as $product){
         $eachproduct = DB::select('SELECT * FROM items WHERE id=?',[$product]);
         array_push($items,$eachproduct);
        }

        
        return view('payment/payment')->with(['address'=>$address,'items'=>$items]);
    }

    //payment methods
    public function pay(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $radio = $_POST['exampleRadios'];

            if($radio =='card'){

                return redirect()->route('paywithcredit');

            }elseif($radio == 'cod'){

                return redirect()->route('paywithcod');

            }elseif($radio == 'paypal'){

                return redirect()->route('paywithpaypal');
            }
        }
    }


    //paywithcreditcard
    public function paywithcredit(){

        $user_id = Auth::id();

        //get user loacation
        $name = DB::table('users')->where('id','=',$user_id)->first(); 
        return view('/payment/credit')->with('name',$name);
    }

    //pay with cod
    public function paywithcod(){
        //cod database
        //insert data username productname productprice
        $user_id = Auth::id();

        $pay = DB::table('totals')->where('id','=',$user_id)->first();

       
        DB::table('totals')->where('userid','=',$user_id)->update(['payment'=>'cod']);

        return view("payment/paymentsuccess");
        
    }

    //pay with paypal
    public function paywithpaypal(){
        echo "Paypal";
    }

    //pay with stripe
    public function stripe(){
        return redirect()->route('stripecharge');
    }

    //after transaction
    public function stripecharge(){

        $user_id = Auth::id();

        $name = DB::table('users')->where('id','=',$user_id)->first(); 
        $useremail =$name->email;

        $total = DB::table('totals')->where('id','=',$user_id)->first(); 
        $totalprice = $total->total;

        

	    \Stripe\Stripe::setApiKey('sk_test_TwxygvxlAOfTn641sSShY7Bj003koNiFBq');

	    //sanitize post array
	    $POST = filter_var_array($_POST,FILTER_SANITIZE_STRING);

	    $email = $useremail;
	    $token =$POST['stripeToken'];


	    //Create Customer in Stripe
	    $customer =\Stripe\Customer::create(array(
	    	"email" => $email,
	    	"source" => $token
	    ));

	    //Charge Custoner in Stripe
	    $charge =\Stripe\Charge::create(array(
	    	"amount" =>$totalprice,
	    	"currency" => "usd",
	    	"description" => "buy shoe",
	    	"customer" => $customer->id
	    ));

	    print_r($charge);
    }
}
