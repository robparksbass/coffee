<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use App\Cart;


class ProductController extends Controller
{
    public function getIndex()
    {
        $products = Product::all();
        return view('shop.index', [
            'products' => $products
        ]);        
    }
//tutorial creator's:
    public function getAddToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('cart', $cart);
        return redirect()->route('product.index');
    }
}

//mine:
    // public function getAddToCart(Request $request, $id) {
    //     $product = Product::find($id);
    //     $oldCart = Session::has('cart') ? Session::get('cart') : null;
    //     $cart = new Cart($oldCart);
    //     $cart->add($product, $product->id);
        
    //     $request->session()->put('cart', $cart);
    //     dd($request->session()->get('cart'));
        
    //     return redirect()->route('product.index');
        
    //     if(!$oldCart) { 
    //      $cart = new Cart($oldCart); 
    //     } 
    //     // dd($cart);
    //     $cart->add($product, $product->id);
        
        
//         //  $product = $product->id; 
//         //  $request->session()->put('cart', $cart);
//         // $cart->add($product, $product->id);

//         $request->session()->put('cart', $cart);
//         dd($request->session()->get('cart'));
//         return redirect()->route('product.index');
//     }
// }

//Sean's:

//     public function getAddToCart(Request $request, $id){ 
//          $product = Product::find($id); 
//          $cart = Session::has('cart') ? Session::get('cart') : null;
//          //$cart = new Cart($oldCart); 
//          if(!$cart) {
//          $cart = new Cart($cart); 
//          } 
//          //$product = $product->id; 
//          $cart->add($product, $product->id); 
//          Session::put('cart', $cart); 
//          //$request->session()->put('cart', $cart);
//          //var_dump($request->session()->get('cart')); 
//          return redirect()->route('product.index'); }
// }