<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
   public function searchtype(){
    $type = $_GET['type'];

    if($type == "casual"){

        $shoes = DB::table('items')->where(['type'=>$type,'gender'=>'male'])->get();
       
        return view('search/filtersearch')->with('shoes',$shoes);

    }elseif($type == "formal"){

        $shoes = DB::table('items')->where(['type'=>$type,'gender'=>'male'])->get();
        return view('search/filtersearch')->with('shoes',$shoes);

    }elseif($type == "sports"){

        $shoes = DB::table('items')->where(['type'=>$type,'gender'=>'male'])->get();
        return view('search/filtersearch')->with('shoes',$shoes);
    }

   }

   public function searchtypewomen(){
    $type = $_GET['type'];

    if($type == "casual"){

        $shoes = DB::table('items')->where(['type'=>$type,'gender'=>'female'])->get();
        return view('search/filtersearch')->with('shoes',$shoes);

    }elseif($type == "formal"){

        $shoes = DB::table('items')->where(['type'=>$type,'gender'=>'female'])->get();
        return view('search/filtersearch')->with('shoes',$shoes);

    }elseif($type == "sports"){

        $shoes = DB::table('items')->where(['type'=>$type,'gender'=>'female'])->get();
        return view('search/filtersearch')->with('shoes',$shoes);
    }
   }

   public function searchbrand(){
    $type = $_GET['brand'];

    if($type == "addidas"){

        $shoes = DB::table('items')->where('brand','addidas')->get();
        return view('search/filtersearch')->with('shoes',$shoes);

    }elseif($type == "nike"){

        $shoes = DB::table('items')->where('brand','nike')->get();
        return view('search/filtersearch')->with('shoes',$shoes);

    }elseif($type == "puma"){

        $shoes = DB::table('items')->where('brand','puma')->get();
        return view('search/filtersearch')->with('shoes',$shoes);
    }
   }

   public function searchprice(){
    $max=$_GET['max'];
    $min = $_GET['min'];

    if($max > 0){
        if($max == '500'){

            $shoes = DB::table('items')->where('price','<','500')->get();
            return view('search/filtersearch')->with('shoes',$shoes);

        }elseif($max == '1000'){

            $shoes = DB::table('items')->where('price','<','1000')->get();
            return view('search/filtersearch')->with('shoes',$shoes);

        }elseif($max == '5000'){
            $shoes = DB::table('items')->where('price','<','5000')->get();
            return view('search/filtersearch')->with('shoes',$shoes);
        }

        }else{

        $shoes = DB::table('items')->where('price','>','5000')->get();
        return view('search/filtersearch')->with('shoes',$shoes);

    }
   }
}
