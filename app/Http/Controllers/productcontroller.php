<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use Session;
use Illuminate\Support\Facades\DB;

class productcontroller extends Controller
{
    //
    function index(){
        // return "welcome to product page";
       $data= product::all();
       return view('product',['products'=>$data]);
    }

    function detail($id)
    {
        $data= product::find($id);
        return view('detail',['product'=>$data]);
    }

    function search(Request $req)
    {
      $data= product::where('name','like','%'.$req->input('query').'%')->get();
      return view('search',['products'=>$data]);

    }

    function addtocart(Request $req) {
        if ($req->session()->has('user')) 
        {
            $cart= new cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }

    static function cartItem()
    {
        $userId= Session::get('user')['id'];
        return cart::where('user_id',$userId)->count();
    }

    function cartList()
     {
        $userId= Session::get('user')['id'];
          $data= DB::table('cart')
        ->join('products','cart.product_id','product_id')
        ->select('products.*','cart.id as cart_id')
        ->where('cart.user_id',$userId)
        ->get();
        return view('cartlist',['products'=>$data]);
    }

    function removeCart($id)
    {
      Cart::destroy($id);
       return redirect('/cartlist');
    }
}
