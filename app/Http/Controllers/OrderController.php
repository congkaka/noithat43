<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        if (!$request->has('keyword') || empty($request->keyword)) {

            $orders = Order::orderBy('id', 'desc')->paginate(5);
        } else {

            $kw = $request->keyword;

            $orders = Order::where('email', 'like', "%$kw%")->orwhere('number', 'like', "%$kw%")->orderBy('id', 'desc')->paginate(5);

            $orders->withPath("order?keyword=$kw");
        }

        return view('admin.order.index', compact('orders'));
    }

    public function getOrder()
    {

        return view('admin.order.detail');
    }

    public function confirmForm($id)
    {
        $order = Order::find($id);
        return view('admin.order.confirm', compact('order'));
    }

    public function editForm(Request $request)
    {
        $order = Order::find($request->id);
        $order->total_price = $request->total_price;
        $order->save();
        return redirect()->route('list.order');
    }

    public function delete($id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect()->route('list.order');
    }

    public function detail($id)
    {
        $order = Order::find($id);
        return view('admin.order.detail', compact('order'));
    }
}
