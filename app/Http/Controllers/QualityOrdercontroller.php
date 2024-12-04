<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\StoreOrder;
use App\Models\Department;
use App\Models\StoreStationaryProduct;

class QualityOrdercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $department = $user->role;
        $orders = StoreOrder::where('dpt', $department)->orderby('id', 'desc')->paginate(10);
        return view('quality.order.index')->with(compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stocks=StoreStationaryProduct::all();
        return view('quality.order.add',compact('stocks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'date' => 'required',
            'Title' => 'required',
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
        return redirect()->to(route('quality.order.index'))->with('success', 'Add Order successfully.');
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
        $stocks=StoreStationaryProduct::all();
        return view('quality.order.edit',compact('order','stocks'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validation Start //
        $this->validate(request(), [
            'date' => 'required',
            'Title' => 'required',
            'Quantity' => 'required',

        ]);

        $order=StoreOrder::find($id);
        $user = Auth::user();
        $department = $user->role;
        $dpt=$department;
        $order->update([
            'date' => request()->get('date'),
            'title' => request()->get('Title'),
            'qty' => request()->get('Quantity'),
            'dpt' => $dpt,
        ]);
        return redirect()->to(route('quality.order.index'))->with('success', 'Order Update successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = StoreOrder::find($id);
        $order->delete();
        return redirect()->to(route('quality.order.index'))->with('success', 'Order deleted successfully.');
    }

    public function search(Request $request)
    {


        $searchQuery = $request->input('search');


        $user = Auth::user();
        $role = $user->role;

        $records = StoreOrder::where(function ($query) use ($searchQuery) {
                $query->where('title', 'LIKE', "%{$searchQuery}%");
            })
            ->where('dpt', $role)
            ->orderby('id', 'desc')
            ->paginate(8);

        return view('quality.order.view')->with(compact('records', 'searchQuery'));
}
}
