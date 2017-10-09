<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{

    protected $fillable=['status'];

    public function inShoppingCart(){
        return $this->hasMany('Ap\InShoppingCart');
    }
    public function products(){
        return $this->belongsToMany('App\Product','in_shopping_carts');
    }
    public function productsSize(){
        return $this->products()->count();
    }
    public function total(){
        return $this->products()->sum('pricing');
    }
    public static function findOrCreateBySessionID($shopping_cart_id){
        if ($shopping_cart_id) {
            //buscar el carritos de compras con este ID
            return ShoppingCart::findBySession($shopping_cart_id);
        } else {
            //crear un carrito de compras
            return ShoppingCart::createWhithoutSession();
        }
        
    }
    public static function findBySession($shopping_cart_id){
        return ShoppingCart::find($shopping_cart_id);
    }
    public static function createWhithoutSession(){
             return ShoppingCart::create([
            'status'=>'incompleted'
        ]);
    }
}
