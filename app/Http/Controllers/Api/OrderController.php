<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\models\Order;
use App\models\Product;

class OrderController extends Controller
{
     public function createOrder(OrderRequest $request)
    {
        if($request->validated())
        {
            try{
                $product = product::findOrFail($request['product_id']);
                $order = Order::create([
                //  'user_id'=>Auth::user()->id,
                'user_id'=>'1',
                 'shop_id'=>$product->shop_id,
                 'product_id'=>$request['product_id'],
                 'order_code'=>rand(100000,999999),
                 'sub_total'=>$request['sub_total'],
                 'tax'=>$request['tax'],
                 'shipment_fees'=>$request['shipment_fees'],
                 'total_amount'=>$request['total_amount'],
                 'payment_method'=>$request['payment_method'],
                 'item_quantity'=>$request['item_quantity'],   
                ]);
                return response()->json([
                    'message' => 'order created '.$order->code.' created successfully',
                    'success' => true,
                ],200);
            }catch(\Exception $e){
                return response()->json([
                    'message' => $e->getMessage(),
                    'code'=>$e->getCode(),
                    'success' => false
                ]);
            }
        }
    }
}
