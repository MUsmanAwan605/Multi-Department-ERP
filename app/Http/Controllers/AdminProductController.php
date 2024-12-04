<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class AdminProductController extends Controller
{
    public function index()
    {

        $products = Product::orderBy('id','DESC')->paginate(10);
        return view("admin.production.product.index")->with(compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.production.product.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

         // Validation 
         $this ->validate(request(),[
            'title' => 'required',
            'qty' => 'required',
            'date' => 'required'
        ]);


       $prev_qty = Product::where('title', $request->get('title'))
        ->orderBy('created_at', 'desc')
        ->value('qty');

        $ttl_qty = $prev_qty + $request->get('qty');

        Product::create([
            'title' => request()->get('title'),
            'qty' =>$ttl_qty,
            'date' => request()->get('date'),
        ]);
        return redirect()->to('admin/production/product');
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
        $product = Product::find($id);
        return view('admin/production/product/edit')->with(compact('product'));
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
        $product = Product::find($id);
        $product->update([
            'title' => request()->get('title'),
            'qty' => request()->get('qty'),
            'date' => request()->get('date'),
        ]);

         return redirect()->to('admin/production/product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->to('admin/production/product');
    }

}
