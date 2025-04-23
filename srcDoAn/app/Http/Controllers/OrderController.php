<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    //
    public function index()
    {
        $orders = Order::all();
        return view('crud_user.crud_Order', compact('orders'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'order_name' => 'required',
            'customer_name' => 'required',
            'quantity' => 'required|integer',
        ]);

        Order::create($validated);

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'order_name' => 'required',
            'customer_name' => 'required',
            'quantity' => 'required|integer',
        ]);

        $order = Order::findOrFail($id);
        $order->update($validated);

        return redirect()->back();
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->back();
    }
}
