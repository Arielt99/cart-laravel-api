<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
   {
        $cart = Cart::all()->load('product');

        return response()->json($cart);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
   {
        try{
            $request->validate([
                'product_id' => 'required',
            ]);
        } 
        catch (\Exception $e){
            return response()->json(['error' => true, 'message' => $e->getMessage()], 422);
        }
        $product = Product::find($request->get('product_id'));

        if (!$product){
            return response()->json(['error' => true, 'message' => 'Unable to find Product with ID '. $request->get('product_id')], 404);
        }

        $cartProduct = Cart::where('product_id', $request->get('product_id'))->first();

        if ($cartProduct){
            $cartProduct->quantity += 1;
            $cartProduct->save();

            $cartProduct->load('product');
            return response()->json($cartProduct);
        }

        else{
            $newCart = new Cart();
            $newCart->quantity = 1;
            $newCart->product_id = $request->get('product_id');
            $newCart->save();

            $newCart->load('product');
            return response()->json($newCart);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
   {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
   {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
   {
        Cart::truncate();

        return response()->json([], 200);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function delete($product_id)
   {
        $cart = Cart::where('product_id', $product_id)->first();
        if (!$cart){
            return response()->json(['error' => true, 'message' => 'Unable to find Cart Product with ID '. $product_id], 404);
        }
        $cart->delete();

        return response()->json([], 200);

    }
}