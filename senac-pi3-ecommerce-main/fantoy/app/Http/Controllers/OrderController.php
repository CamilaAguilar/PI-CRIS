<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;


class OrderController extends Controller
{
    public function add(Request $request){
        //Pegar os dados do carrinho
        $cart = Cart::where('user_id','=',Auth()->user()->id)->get();

        //Criar o pedido
        $order = Order::create([
            'user_id' => Auth()->user()->id,
            'status' => 'Processando',
            'address' => 'Rua TESTE',
            'address_number' => '111',
            'address_city' => 'São Paulo',
            'address_state' => 'SP',
            'cc_number' => substr($request->cc_card,-4),
        ]);

        foreach($cart as $item){
            OrderItem::create([
               'order_id' => $order->id,
               'product_id' => $item->product_id,
               'quantity' => $item->quantity,
               'price' => $item->product()->price,
            ]);

            $item->delete();
        }

        return redirect(route('order.show'));

    }

    public function show(){
        return view('order.show');
    }
}
