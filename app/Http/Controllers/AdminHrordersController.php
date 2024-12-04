<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;


class AdminHrordersController extends Controller
{
    public function index()
    {
        $orders=Order::process('id','desc')->paginate(10);
        return view('admin.humanresources.Orders.index')->with(compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $order=Order::find($id);

        return view('admin.humanresourcesOrders.edit')->with(compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validation Start //
        $this->validate(request(),[

            'ordrnum'=>'required',
            'title'=>'required',
            'raw'=>'required',
            'amount'=>'required|integer',
            'qty'=>'required|integer',
            'date'=>'required',

        ]);


        $order=Order::find($id);


        $order->update([
            'ordrnum'=>$request->get('ordrnum'),
            'title'=>$request->get('title'),
            'raw'=>$request->get('raw'),
            'amount'=>$request->get('amount'),
            'qty'=>$request->get('qty'),
            'department'=>$request->get('department'),
            'date'=>$request->get('date'),

        ]);
        if ($order->status=='process') {
            return redirect()->to('/admin/humanresources/orders');
         } else {
            return redirect()->to('/admin/humanresources/order/confirmed');

         }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order=Order::find($id);
            $order->delete();
            if ($order->status=='process') {
                return redirect()->to('hr/orders');
             } else {
                return redirect()->to('/admin/humanresources/order/confirmed');

             }
    }

    public function search_order(Request $request)
    {
        // $query = $request->input('q');

        $searchQuery=$request->input('search');

        $records=Order::where(function($query) use ($searchQuery) {
        $query->where('title','LIKE',"%{$searchQuery}%")
        ->orWhere('id','LIKE',"%{$searchQuery}%");
        })->paginate(8);

        return view('admin.humanresources.Orders.view',compact('searchQuery','records'));
    }
    public function orderconfirmed()
    {
        $orders=Order::confirmed('id','asc')->paginate(10);
        return view('admin.humanresources.Orders.orderconfirmed')->with(compact('orders'));
    }
}
