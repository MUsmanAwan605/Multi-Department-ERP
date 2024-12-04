<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Subsupplier;
use App\Models\Department;

class InventoryController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventories=Inventory::orderBy('id','DESC')->paginate(10);
        return view("store.inventory.index")->with(compact('inventories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Subsuppliers=Subsupplier::all();
        $departments=Department::all();
        return view("store.inventory.add",compact('Subsuppliers','departments'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
           'SerialNumber'=> 'required',
           'Date'=> 'required',
           'Description'=> 'required',
           'SupplierName'=> 'required',
            // 'DepartmentName'=> 'required',
            'QuantityIn'=> 'required',
            // 'QuantityOut'=> 'required',
            // 'balance'=> 'required',
            'DeliveryChallan'=> 'required',
            'weightIn'=> 'required',
           'PacketsIn'=> 'required',
        //    'weightOut'=> 'required',
            'NoCartons'=> 'required',

        ]);

        Inventory::create([
                's_no'=>request()->get('SerialNumber'),
                'date' =>request()->get('Date'),
                'dscp' =>request()->get('Description'),
                'supp_name'=>request()->get('SupplierName'),
                // 'dpt_name'=>request()->get('DepartmentName'),
                'qty_in' =>request()->get('QuantityIn'),
                // 'qty_out'=>request()->get('QuantityOut'),
                // 'balance'=> request()->get('balance'),
                'd_c'=>request()->get('DeliveryChallan'),
                'weight_in'=>request()->get('weightIn'),
                'packets_in'=>request()->get('PacketsIn'),
                // 'weight_out'=>request()->get('weightOut'),
                'no_cartons'=>request()->get('NoCartons'),
         ]);
         return redirect()->to(route('inventory.index'))->with('success', 'Inventory added successfully.');


    }

    /**z
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
        $inventory=Inventory::find($id);
        $Subsuppliers=Subsupplier::all();
        $departments=Department::all();
        return view("store.inventory.edit",compact('Subsuppliers','departments','inventory'));
        // return view("store/inventory/edit")->with(compact());

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            's_no' => 'required',
            'date' => 'required',
            'dscp' => 'required',
            'supp_name' => 'required',
            // 'dpt_name' => 'required|not_in:none',
            'qty_in' => 'required',
            // 'qty_out' => 'required',
            // 'balance' => 'required',
            'd_c' => 'required',
            'weight_in' => 'required',
            'packets_in' => 'required',
            // 'weightOut' => 'required',
            'no_cartons' => 'required',
        ]);

        $inventory=Inventory::find($id);
        $inventory->update([
            's_no' => $request->input('s_no'),
            'date' => $request->input('date'),
            'dscp' => $request->input('dscp'),
            'supp_name' => $request->input('supp_name'),
            // 'dpt_name' => $request->input('dpt_name'),
            'qty_in' => $request->input('qty_in'),
            // 'qty_out' => $request->input('qty_out'),
            // 'balance' => $request->input('balance'),
            'd_c' => $request->input('d_c'),
            'weight_in' => $request->input('weight_in'),
            'packets_in' => $request->input('packets_in'),
            // 'weight_out' => $request->input('weightOut'),
            'no_cartons' => $request->input('no_cartons'),
        ]);
        return redirect()->to(route('inventory.index'))->with('success', 'Inventory Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $inventory = Inventory::find($id);
        $inventory->delete();
        return redirect()->to(route('inventory.index'))->with('success', 'Inventory Delete successfully.');

    }

    public function search (Request $request)
    {
        $searchQuery=$request->input('search');


        $records=Inventory::where(function($query) use ($searchQuery){
                $query->where('s_no','LIKE',"%{$searchQuery}%")
                ->orWhere('supp_name','LIKE',"%{$searchQuery}%");
                })->paginate(8);


return view('store.inventory.view',compact('searchQuery','records'));
    }
}
