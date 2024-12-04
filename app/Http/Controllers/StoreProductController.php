<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StoreProduct;

class StoreProductController extends Controller
{
    public function index()
    {

        $products = StoreProduct::orderBy('id','DESC')->paginate(10);
        return view("store.product.index")->with(compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("store.product.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'title' => 'required',
            'qty' => 'required',
            'date' => 'required',
        ]);

       $prev_qty = StoreProduct::where('title', $request->get('title'))
        ->orderBy('created_at', 'desc')
        ->value('qty');

        $ttl_qty = $prev_qty + $request->get('qty');

        StoreProduct::create([
            'title' => request()->get('title'),
            'qty' =>$ttl_qty,
            'date' => request()->get('date'),
        ]);
        return redirect()->to(route('storeproduct.index'));
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
        $product = StoreProduct::find($id);
        return view('store.product.edit')->with(compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate(request(), [
            'title' => 'required',
            'qty' => 'required',
            'date' => 'required',


        ]);
        $product = StoreProduct::find($id);
        $product->update([
            'title' => request()->get('title'),
            'qty' => request()->get('qty'),
            'date' => request()->get('date'),
        ]);

         return redirect()->to(route('storeproduct.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = StoreProduct::find($id);
        $product->delete();
        return redirect()->to(route('storeproduct.index'));
    }

    public function search (Request $request)
    {
        $searchQuery=$request->input('search');


        $records=StoreProduct::where(function($query) use ($searchQuery){
                $query->where('title','LIKE',"%{$searchQuery}%")
                ->orWhere('qty','LIKE',"%{$searchQuery}%");
                })->paginate(8);


return view('store.product.view',compact('searchQuery','records'));
    }
}
