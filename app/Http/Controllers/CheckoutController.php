<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Locations;

class CheckoutController extends Controller
{
    //item description controller
    public function item($id){

        $item = DB::select('SELECT * FROM items WHERE id = ?',[$id]);
        return view('checkout/itemdetails')->with('item',$item);
    }

    //cart controller save the size and quantity to the database and redirect to account
    public function cart(){

        $user_id = Auth::id();
        $product_id = $_GET['product_id'];
        $quantity = $_GET['items'];
        $size = $_GET['size'];
        $currenturl = $_SERVER['REQUEST_URI'];
        
        if($user_id == ""){

            //if the user is not logged in then redirect to login page
            return view('auth/login');

        }else{

            //get data from cart and check if the user has its own cart
             $cart = DB::select('SELECT * FROM cart WHERE userid =?',[$user_id]);
             DB::insert("INSERT INTO cart (userid,item_id,quantity,size) VALUES (?,?,?,?)",[$user_id,$product_id,$quantity,$size]);
                 
             return redirect()->route('account');
            }        
    }
    

    //order page 
    public function account(){

        $user_id = Auth::id();
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

         $totalprice=10;
         //save to total database
         foreach($items as $item0){
             foreach($item0 as $item){
                $totalprice += $item->price;
             }
             
         }

         $total = DB::table('totals')->where('userid','=',$user_id)->first(); 
         if(empty($total)){
             //insert new row
             DB::table('totals')->insert([
                 'userid' => $user_id,
                 'total' => $totalprice
             ]);

             return view('checkout/cart')->with('items',$items);
            
         }else{

            $name = DB::table('totals')->where('userid','=',$user_id)->first();
            $usertotal = $name->total;
            if($usertotal == $totalprice){
                return view('checkout/cart')->with('items',$items);
              
            }else{
                DB::table('totals')->where('userid',$user_id)->update(['total'=>$totalprice]);
                return view('checkout/cart')->with('items',$items);
                
            }
        }  
}


    public function checkout(){
        $user_id = Auth::id();
     
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

         //check if the user address exists in the address database
         $address = DB::select('SELECT * FROM locations WHERE userid=?',[$user_id]);
         if(count($address)>0){
            //user has address
            return view('checkout/checkout')->with(['cart'=>$cart , 'items' => $items,'address'=>$address]);
         }else{
             //no address
             return view('checkout/checkout')->with(['cart'=>$cart , 'items' => $items,'address'=>$address]);
         }
        
    }


    //delete products
    public function remove($id){
        $user_id = Auth::id();
        DB::table('cart')->where(['userid'=>$user_id,'item_id'=>$id])->delete();

        return redirect()->route('account');
    }


    //validate checkout form

    public function valcheckout(){

        $user_id = Auth::id();
        //address details
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $pincode = $_POST['pincode'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        
        $getaddress = DB::table('locations')->where('userid',$user_id)->first();

        if(empty($getaddress)){

           //create address
           DB::insert("INSERT INTO locations (userid,name,address,city,state,pin,email,phone) VALUES(?,?,?,?,?,?,?,?)",[$user_id,$name,$address,$city,$state,$pincode,$email,$phone]);
           return redirect()->route('checkout');

        }else{

            //update address
            DB::table('locations')->where('userid',$user_id)->update(['name' => $name,'address'=>$address,'city'=>$city,'state'=>$state,'pin'=>$pincode,'email'=>$email,'phone'=>$phone]);
            return redirect()->route('checkout');
            
        }
        }
    }

    //show editaddress
    public function editaddress(){
        return view('checkout/editaddress');
    }
}





/*
         $totalprice=10;
         //save to total database
         foreach($items as $item0){
             foreach($item0 as $item){
                $totalprice += $item->price;
             }
             
         }

         $total = DB::table('totals')->where('userid','=',$user_id)->first(); 
         if(empty($total)){
             //insert new row
             DB::table('totals')->insert([
                 'userid' => $user_id,
                 'total' => $totalprice
             ]);

             return view('checkout/cart')->with(['items',$items]);
            
         }else{

            $name = DB::table('totals')->where('userid','=',$user_id)->first();
            $usertotal = $name->total;
            if($usertotal == $totalprice){
                return view('checkout/cart')->with(['items',$items]);
              
            }else{
                DB::table('totals')->where('userid','=',$user_id)->update('total',$totalprice);
                return view('checkout/cart')->with(['items',$items]);
                
            }
        }