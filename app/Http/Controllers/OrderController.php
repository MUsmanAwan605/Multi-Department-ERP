<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $orders = Order::orderBy('id','DESC')->paginate(10);
        return view("store.order.index")->with(compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("production.order.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate(request(), [
            'title' => 'required',
            'ordrnum' => 'required',
            'defdpt' => 'required',
            'raw' => 'required',
            'amount' => 'required',
            'qty' => 'required',
            'date' => 'required',
            'dpt' => 'required',


        ]);
        Order::create([
            'title' => request()->get('title'),
            'ordrnum' => request()->get('ordrnum'),
            'defdpt' => request()->get('defdpt'),
            'date' => request()->get('date'),
            'raw' =>request()->get('raw'),
            'amount' =>request()->get('amount'),
            'qty' =>request()->get('qty'),
            'dpt' => request()->get('dpt'),

        ]);
        return redirect()->to('/production/order');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order = Order::find($id);
        return view('/production/order/edit')->with(compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate(request(), [
            'title' => 'required',
            'ordrnum' => 'required',
            'defdpt' => 'required',
            'raw' => 'required',
            'amount' => 'required',
            'qty' => 'required',
            'date' => 'required',
            'dpt' => 'required',


        ]);
        $order = Order::find($id);
        $order->update([
            'title' => request()->get('title'),
            'ordrnum' => request()->get('ordrnum'),
            'defdpt' => request()->get('defdpt'),
            'date' => request()->get('date'),
            'raw' =>request()->get('raw'),
            'amount' =>request()->get('amount'),
            'qty' =>request()->get('qty'),
            'dpt' => request()->get('dpt'),
        ]);
        return redirect()->to('/production/order');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect()->to('/production/order');
    }

    public function search(Request $request)
    {
        $date1 = $request->get('date1');
        $date2 = $request->get('date2');
        $title = $request->get('title');

        $records = order::whereBetween('date', [$date1, $date2])->where('title','LIKE', ["%$title%"])->orderBy('id', 'desc')->get();

        return view('/production/order/view',compact('records', 'date1', 'date2', 'title'));
    }
}
