<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Item;

class PagesController extends Controller
{
    //get access to home page
    public function home(){
        return view('pages/home');
    }

    //get access to shop page
    public function shop(){
        //get all item data from tyhe database
        $items = DB::table('items')->paginate(9);
        return view('pages/shop')->with('items',$items);
    }


    //get access to contact page
    public function contact(){
        return view('pages/contact');
    }
}
