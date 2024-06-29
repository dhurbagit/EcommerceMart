<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Order;
use App\Models\Product;
use App\Models\UserInfo;
use App\Models\Shoppingcart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ShoppingCartController extends Controller
{
    //

    public function shoppingCart()
    {
        $cartItems = Shoppingcart::with('product')->where('user_id', Auth::id())->get();

        $total = 0;
        foreach ($cartItems as $cartItem) {

            $total += $cartItem->product->price * $cartItem->quantity;
        }

        return view('frontend.cart', compact('cartItems', 'total'));
    }

    public function addToCart(Request $request, $id)
    {
        // Check if the user is logged in
        if (!Auth::check()) {
            return redirect()->back()->with('error', 'You must be logged in to add products to the cart');
        }

        // Find the product
        $product = Product::find($id);

        // Check if the product exists
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found');
        }

        $userId = auth()->user()->id;
        $quantity = $request->input('quantity', 1);
        $color = $request->input('color');

        // Check if the product is already in the cart
        $cartItem = ShoppingCart::where('product_id', $product->id)
            ->where('user_id', $userId)
            ->first();

        if ($cartItem) {
            // If the product is already in the cart, update the quantity and color
            $cartItem->quantity += $quantity;
            $cartItem->color = $color;
            $cartItem->save();
        } else {
            // If the product is not in the cart, create a new cart item
            ShoppingCart::create([
                'product_id' => $product->id,
                'user_id' => $userId,
                'quantity' => $quantity,
                'color' => $color,
            ]);
        }

        // Store shopping cart data in session
        $shoppingCart = ShoppingCart::where('user_id', $userId)->get();
        Session::put('shoppingCart', $shoppingCart);

        return redirect()->back()->with('message', 'Product added to cart successfully');
    }





    public function getCartNumber()
    {
        if (Auth::check()) {
            $shoppingCart = ShoppingCart::where('user_id', auth()->user()->id)->with('product.thumbImage')->get();
            $total = 0;
            foreach ($shoppingCart as $item) {
                $total += $item->product->price * $item->quantity;
            }
            // Convert the data to a format suitable for AJAX response
            $products = $shoppingCart->map(function ($item) {
                $imageUrls = $item->product->thumbImage->toArray();

                return [
                    'shoppingCart_id' => $item->id,
                    'product_id' => $item->product_id,
                    'quantity' => $item->quantity,
                    'product' => [
                        'product_name' => $item->product->product_name,
                        'price' => $item->product->price,
                        'images' => $imageUrls['t_image'],
                        // Add other product attributes as needed
                    ]
                ];
            });

            // dd($products);
            $cartCount = $shoppingCart->count();
            return response()->json(['cartCount' => $cartCount, 'products' => $products, 'total' => $total]);
        } else {
            $cartCount = 0;
            return response()->json(['cartCount' => $cartCount, 'products' => 'No Product', 'total' => '0']);
        }
    }


    public function productQuantity(Request $request, $id)
    {
        $quantity = Shoppingcart::find($id);
        $data['quantity'] = $request->value;

        // Update the quantity in the database
        $quantity->update($data);

        return response()->json(['quantity' => $quantity]);
    }

    public function checkoutCart(Request $request)
    {
        $request->validate([
            'shipping' => 'required',
        ]);

        $cartItems = Shoppingcart::with('product')->where('user_id', Auth::id())->get();
        $total = 0;
        foreach ($cartItems as $item) {
            $total += $item->product->price * $item->quantity;
        }
        return view('frontend.checkout', compact('cartItems', 'total'));
    }
    public function placeOrder(Request $request)
    {


        if (Auth::check()) {
            // Check if the user is authenticated
            $userInfoExists = UserInfo::where('user_id', Auth::id())->exists();

            if (!$userInfoExists) {
                // User info does not exist, create it
                $input = $request->all();
                $input['user_id'] = Auth::id();

                UserInfo::create($input);
            }

            $allCart = Shoppingcart::where('user_id', Auth::id())->get();

            if ($allCart->count() > 0) {
                foreach ($allCart as $cart) {
                    $order = new Order();
                    $order->product_id = $cart->product_id;
                    $order->user_id = $cart->user_id;
                    $order->quantity = $cart->quantity;
                    $order->status = 'pending';
                    $order->payment_type = $request->payment_type;
                    $order->shipping = $request->shipping;
                    $order->save();
                }

                // Delete items from the cart after creating orders
                Shoppingcart::where('user_id', Auth::id())->delete();

                return redirect()->back()->with('message', 'Product Order successful');
            } else {
                return redirect()->back()->with('error', 'No items in the cart');
            }
        } else {
            // User is not authenticated, handle accordingly (redirect to login or show error)
            return redirect()->route('login')->with('error', 'Please log in to place an order');
        }
    }

    public function removeFromCart($id)
    {
        $deleteCartItem = Shoppingcart::findOrFail($id)->delete();
        return redirect()->back();
    }
    public function removeCartItem($id)
    {
        $deleteCartItem = Shoppingcart::findOrFail($id)->delete();
        return redirect()->back();
    }
    public function singleDetail($id)
    {
        $products = Product::with('thumbImage.galleryImages')->find($id);

        // Dump and die to inspect the product object

        return view('frontend.single', compact('products'));
    }

    public function shop(){
        return view('frontend.shop');
    }
}
