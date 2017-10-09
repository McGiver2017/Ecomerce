<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShoppingCart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shopping_cart_id = \Session::get('shopping_cart_id');        
        $shopping_cart = ShoppingCart::findOrCreateBySessionID($shopping_cart_id);                
        \Session::put('shopping_cart_id',$shopping_cart->id);
        return view('home',['shopping_cart'=>$shopping_cart]);
    }
}
