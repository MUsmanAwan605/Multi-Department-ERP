<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\StoreOrder;
use App\Models\Department;
use App\Models\StoreStationaryProduct;

class adminStationaryorderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexxx()
    {

        $orders=StoreOrder::orderby('id', 'desc')->paginate(10);
        return view('admin.stationaryorderrr.indexx')->with(compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Departments=Department::all();
        $stocks=StoreStationaryProduct::all();
        return view('admin.stationaryorderrr.add',compact('Departments','stocks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $this->validate(request(), [
        //     'date' => 'required',
        //     'Title' => 'required',
        //     'Quantity' => 'required',
        //     'Department' => 'required|not_in:none',

        // ]);
        

        StoreOrder::create([
            'date' => request()->get('date'),
            'title' => request()->get('Title'),
            'qty' => request()->get('Quantity'),
            'dpt' => request()->get('Department'),
        ]);
        return redirect()->to(route('adminorder.index'))->with('success', 'Add Order successfully.');
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
        $Departments=Department::all();
        return view('admin.stationaryorderrr.edit',compact('order','Departments','stocks'));
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
            'Department' => 'required|not_in:none',
        ]);

        $order=StoreOrder::find($id);

        $order->update([
            'date' => request()->get('date'),
            'title' => request()->get('Title'),
            'qty' => request()->get('Quantity'),
            'dpt' => request()->get('Department'),
        ]);
        return redirect()->to(route('adminstoreorder.index'))->with('success', 'Order Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $loan = StoreOrder::find($id);
        $loan->delete();
        return redirect()->to(route('adminstoreorder.index'))->with('success', 'Order deleted successfully.');
    }

    public function search(Request $request)
    {

        $searchQuery = $request->input('search');



        $records=StoreOrder::where(function($query) use ($searchQuery){
            $query->where('dpt','LIKE',"%{$searchQuery}%")
            ->orWhere('date','LIKE',"%{$searchQuery}%");
            })->paginate(8);
            // dd($records, $searchQuery);

        return view('admin.stationaryorderrr.viewww')->with(compact('records', 'searchQuery'));
        // dd($query->toSql(), $query->getBindings());
}
}
