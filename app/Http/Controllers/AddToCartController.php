<?php

namespace App\Http\Controllers;

use notify;
use App\Models\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AddToCartController extends Controller
{
   
            public function viewCart()
            {
              return view('frontend.pages.addToCart.viewCard');
            }
            public function clearCart()
            {
                session()->forget('cart');
                Alert::toast()->success('Cart Clear Successfully.');
                return redirect()->back();
            }
            public function cartItemDelete($id)
            {
              $cart=session()->get('cart');
              unset($cart[$id]);
                session()->put('cart',$cart);
                Alert::toast()->success('Product removed successfully');
              return redirect()->back();
            }

            public function updateCartQuantity(Request $request, $id)
            {
                $cart = session()->get('cart');
                $product = Product::find($id); // Find the product by its ID
            
                if (!$product) {
                    Alert::toast()->error('Product not found.');
                    return redirect()->back();
                }
            
                if (isset($cart[$id])) {
                    // Check if the requested quantity is available in stock
                    if ($request->quantity <= $product->stock) {
                        $cart[$id]['quantity'] = $request->quantity;
                        $cart[$id]['subtotal'] = $cart[$id]['quantity'] * $cart[$id]['price'];                 
                        session()->put('cart', $cart);
                        Alert::toast()->success('Cart quantity updated successfully.');
                    } else {
                        Alert::toast()->error("Product {$product->name} is out of stock.");
                    }
                } else {
                    Alert::toast()->success('Product not found in cart.');
                }
            
                return redirect()->back();
            }
            
              public function addToCart($id)
              {
                           $product=Product::find($id);
                  if($product)
                  {
                      $cart=session()->get('cart');
                      if(!$cart)
                      {
                              $myCart[$id]=[
                                'name'=>$product->name,
                                'price'=>$product->price,
                                'quantity'=>1,
                                'subtotal'=>$product->price,
                              ];
          
                            session()->put('cart',$myCart);
                            Alert::toast()->success('Product added to the cart');
          
                            return redirect()->back();
                      }
                               if(!array_key_exists($id,$cart)){
                          $cart[$id]=[
                              'name'=>$product->name,
                              'price'=>$product->price,
                              'quantity'=>1,
                              'subtotal'=>$product->price,
                          ];
          
                          session()->put('cart',$cart);
                          Alert::toast()->success('New product added to the cart');
                          return redirect()->back();        
                      }
                      $cart[$id]['quantity']=$cart[$id]['quantity']+1;
                      $cart[$id]['subtotal']=$cart[$id]['quantity'] * $cart[$id]['price'];
                      session()->put('cart',$cart);
          
                      Alert::toast()->success('Cart successfully updated.');
                      return redirect()->back();
                    }
          
                    Alert::toast()->success('No Product Found.');
                    return redirect()->back();
                      }
        }
