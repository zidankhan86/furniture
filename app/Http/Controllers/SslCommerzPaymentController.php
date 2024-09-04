<?php

namespace App\Http\Controllers;

use App\Library\SslCommerz\SslCommerzNotification;
use App\Models\Product;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class SslCommerzPaymentController extends Controller
{



    public function index(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'address' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'total_price' => 'nullable|numeric|min:0',
            'name' => 'nullable|string',
        ]);
    
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
    
        $product = Product::find($id);
        $cart = session()->get('cart', []);
    
        foreach ($cart as $productId => $cartItem) {
            $product = Product::find($productId);
    
            if ($product) {
                if ($product->stock >= $cartItem['quantity']) {
                    $product->stock -= $cartItem['quantity'];
                    $product->save();
                } else {
                    Alert::toast()->error("Product {$product->name} is out of stock");
                    return redirect()->back();
                }
            }
        }
    
        // Collect product details from the cart
        $productNames = implode(', ', array_column($cart, 'name'));
        $subtotal = array_sum(array_column($cart, 'subtotal'));
    
        $post_data = [
            'total_amount' => $subtotal, // Updated to use subtotal
            'total_price' => $subtotal, // Updated to use subtotal
            'currency' => "BDT",
            'tran_id' => uniqid(), // tran_id must be unique
    
            // CUSTOMER INFORMATION
            'name' => $productNames,
            'full_name' => $request->full_name,
            'cus_email' => $request->email,
            'cus_add1' => $request->address,
            'user_id' => auth()->user()->id,
            'product_id' => $id,
            'cus_state' => "",
            'cus_postcode' => "",
            'cus_country' => "Bangladesh",
            'cus_phone' => $request->phone,
            'cus_fax' => "",
    
            // SHIPMENT INFORMATION
            'ship_name' => "Store Test",
            'ship_add1' => "Dhaka",
            'ship_add2' => "Dhaka",
            'ship_city' => "Dhaka",
            'ship_state' => "Dhaka",
            'ship_postcode' => "1000",
            'ship_phone' => "",
            'ship_country' => "Bangladesh",
    
            'shipping_method' => "NO",
            'product_name' => "Computer",
            'product_category' => "Goods", // Ensure this key is set
            'product_profile' => "physical-goods",
    
            // OPTIONAL PARAMETERS
            'value_a' => "ref001",
            'value_b' => "ref002",
            'value_c' => "ref003",
            'value_d' => "ref004",
        ];
    
        // Before initiating the payment, insert or update the order status as Pending
        $update_product = DB::table('orders')
            ->updateOrInsert([
                'transaction_id' => $post_data['tran_id']
            ], [
                'full_name' => $post_data['full_name'],
                'email' => $post_data['cus_email'],
                'phone' => $post_data['cus_phone'],
                'price' => $post_data['total_amount'],
                'status' => 'Pending',
                'address' => $post_data['cus_add1'],
                'transaction_id' => $post_data['tran_id'],
                'currency' => $post_data['currency'],
                'user_id' => $post_data['user_id'],
                'product_id' => $post_data['product_id'],
                'name' => $post_data['name'],
                'total_price' => $post_data['total_price'],
            ]);
    
        $sslc = new SslCommerzNotification();
        $payment_options = $sslc->makePayment($post_data, 'hosted');
    
        if (!is_array($payment_options)) {
            Alert::toast()->success('Order successful!');
            return redirect()->route('home');
        }
    }
    
    
    
    

    public function success(Request $request)
    {
        // Retrieve data from the request
        $tran_id = $request->input('tran_id');
        $amount = $request->input('amount');
        $currency = $request->input('currency');
    
        $sslc = new SslCommerzNotification();
    
        // Check order status in the order table against the transaction ID
        $order_details = DB::table('orders')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'status', 'currency', 'price')
            ->first();
    
        if ($order_details) {
            if ($order_details->status == 'Pending') {
                // Validate the transaction
                $validation = $sslc->orderValidate($request->all(), $tran_id, $amount, $currency);
    
                if ($validation) {
                    // Update the order status to Processing
                    DB::table('orders')
                        ->where('transaction_id', $tran_id)
                        ->update(['status' => 'Processing']);
    
                    Alert::toast()->success('Transaction is successfully Completed');
                    return redirect()->route('home');
                } else {
                    Alert::toast()->error('Transaction validation failed');
                    return redirect()->route('home');
                }
            } else if ($order_details->status == 'Processing' || $order_details->status == 'Complete') {
                // The order is already processed
                Alert::toast()->success('Order already processed');
                return redirect()->route('home');
            } else {
                Alert::toast()->error('No Product available');
                return back();
            }
        } else {
            Alert::toast()->error('Order details not found');
            return back();
        }
    }
    
    public function fail(Request $request)
    {
        $tran_id = $request->input('tran_id');

        $order_details = DB::table('orders')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'status', 'currency', 'amount')->first();

        if ($order_details->status == 'Pending') {
            $update_product = DB::table('orders')
                ->where('transaction_id', $tran_id)
                ->update(['status' => 'Failed']);
            echo "Transaction is Falied";
        } else if ($order_details->status == 'Processing' || $order_details->status == 'Complete') {
            return redirect()->route('home')->with('success', 'Order successful');
        } else {
            return back()->with('error', 'No Product available');
        }

    }

    public function cancel(Request $request)
    {
        $tran_id = $request->input('tran_id');

        $order_details = DB::table('orders')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'status', 'currency', 'amount')->first();

        if ($order_details->status == 'Pending') {
            $update_product = DB::table('orders')
                ->where('transaction_id', $tran_id)
                ->update(['status' => 'Canceled']);
            echo "Transaction is Cancel";
        } else if ($order_details->status == 'Processing' || $order_details->status == 'Complete') {
            echo "Transaction is already Successful";
        } else {
            echo "Transaction is Invalid";
        }


    }

   

}
