<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;


class CartController extends Controller
{
    public function cart()
    {
        $cartItems = Cart::where('user_id', auth()->id())
            ->with('product') // Eager load the product
            ->get();

        return view('cart', compact('cartItems'));
    }

    public function updateCart(Request $request, $id)
    {

        $cartItem = Cart::find($id);



        if (!$cartItem) {

            return redirect()->back()->with('error', 'Cart item not found.');

        }



        $cartItem->quantity = $request->input('quantity'); // Update quantity from request

        $cartItem->save();



        return redirect()->route('cart.index')->with('success', 'Cart updated successfully.');

    }

    public function removeFromCart($id)
    {
        $cartItem = Cart::find($id);

        if (!$cartItem) {
            return redirect()->back()->with('error', 'Cart item not found.');
        }

        $cartItem->delete(); // Delete the cart item

        return redirect()->route('cart.index')->with('success', 'Product removed from cart.');
    }
}