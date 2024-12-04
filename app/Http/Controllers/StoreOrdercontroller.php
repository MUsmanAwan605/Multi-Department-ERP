<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\Models\StoreStationaryProduct;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\StoreOrder;
use App\Models\Department;
use App\Models\stock;


class StoreOrdercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $orders = StoreOrder::where('status','Process')->orderBy('id','DESC')->paginate(10);
        return view("store.order.index")->with(compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Departments=Department::all();
        $stocks=StoreStationaryProduct::all();
        return view("store.order.add",compact('Departments','stocks'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'date' => 'required',
            'Title' => 'required|not_in:none',
            'Quantity' => 'required',

        ]);

        $user = Auth::user();
        $department = $user->role;
        $dpt=$department;
        StoreOrder::create([
            'date' => request()->get('date'),
            'title' => request()->get('Title'),
            'qty' => request()->get('Quantity'),
            'dpt' => $dpt,
        ]);
        return redirect()->to(route('store.order.index'));
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
        $order=StoreOrder::find($id);
        return view("store.order.edit",compact('order'));


    }

    /**
     * Update the specified resource in storage.
     */

public function update(Request $request, string $id)
{
    $this->validate(request(), [
        'date' => 'required',
        'Title' => 'required',
        'Quantity' => 'required',
    ]);

    $order = StoreOrder::find($id);

    // Check if the order title matches with a stock title
    $stock = StoreStationaryProduct::where('title', $request->get('Title'))->first();
    if (!$stock) {
        return back()->withErrors(['title' => 'Stock not found with this title.'])->withInput();
    }

    // Update the order
    $order->update([
        'date' => request()->get('date'),
        'title' => request()->get('Title'),
        'qty' => request()->get('Quantity'),
        'status' => 'Completed',
    ]);

    // Update the stock quantity
    $currentStockQuantity = $stock->quantity;
    $newStockQuantity = $currentStockQuantity - request()->get('Quantity');
    $stock->update(['quantity' => $newStockQuantity]);

    return redirect()->to(route('stationary.index'));
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $order = StoreOrder::find($id);
        $order->delete();
        return redirect()->to(route('store.order.index'));
    }

    public function search(Request $request)
    {

        $searchQuery=$request->input('search');


        $records=StoreOrder::where(function($query) use ($searchQuery){
                $query->where('title','LIKE',"%{$searchQuery}%");
                })->paginate(8);


        return view('store.order.vieww')->with(compact('records','searchQuery'));
}

}
