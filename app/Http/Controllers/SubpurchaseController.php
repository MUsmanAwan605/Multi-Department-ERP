<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubPurchase;
use App\Models\Subsupplier;

class SubpurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $purchases = Subpurchase::orderBy('id', 'DESC')->paginate(10);
        return view("store.subsupplier.purchase_order.index")->with(compact('purchases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $orders = Subsupplier::get();
        return view("store.subsupplier.purchase_order.add")->with(compact('orders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            's_no' => 'required',
            'po_no' => 'required',
            'date' => 'required|date',
            'd_c' => 'required',
            'dscp' => 'required',
            'qty_in' => 'required',
            'spname' => 'required',
        ]);

        Subpurchase::create([
            's_no' => $request->input('s_no'),
            'po_no' => $request->input('po_no'),
            'date' => $request->input('date'),
            'd_c' => $request->input('d_c'),
            'dscp' => $request->input('dscp'),
            'qty_in' => $request->input('qty_in'),
            'supplier' => $request->input('spname'),
        ]);

        return redirect()->to('/store/subsupplierr/purchase')->with('success', 'Purchase Store successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Method not implemented
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $purchase = Subpurchase::find($id);
        $orders = Subsupplier::get();
        return view("store.subsupplier.purchase_order.edit")->with(compact('purchase', 'orders'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            's_no' => 'required',
            'po_no' => 'required',
            'date' => 'required|date',
            'd_c' => 'required',
            'dscp' => 'required',
            'qty_in' => 'required',
            'spname' => 'required',
        ]);

        $purchase = Subpurchase::find($id);
        $purchase->update([
            's_no' => $request->input('s_no'),
            'po_no' => $request->input('po_no'),
            'date' => $request->input('date'),
            'd_c' => $request->input('d_c'),
            'dscp' => $request->input('dscp'),
            'qty_in' => $request->input('qty_in'),
            'supplier' => $request->input('spname'),
        ]);

        return redirect()->to(route('subpurchase.index'))->with('success', 'Purchase updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $purchase = Subpurchase::find($id);
        if ($purchase) {
            $purchase->delete();
            return redirect()->to(route('subpurchase.index'))->with('success', 'Purchase deleted successfully.');
        } else {
            return redirect()->to(route('subpurchase.index'))->with('error', 'Purchase not found.');
        }
    }

    /**
     * Search for resources.
     */
    public function search(Request $request)
    {
        $searchQuery = $request->input('search');

        $records = Subpurchase::where(function($query) use ($searchQuery) {
            $query->where('s_no', 'LIKE', "%{$searchQuery}%")
                  ->orWhere('supplier', 'LIKE', "%{$searchQuery}%");
        })->paginate(8);

        return view('store.subsupplier.purchase_order.view', compact('searchQuery', 'records'));
    }
}
