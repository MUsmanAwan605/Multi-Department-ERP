<?php

namespace App\Http\Controllers;

use App\Models\Finish;
use App\Models\Finishproduct;
use Illuminate\Http\Request;

class finishproductsController extends Controller
{
    public function index(){

        $products=Finishproduct::orderby('id', 'desc')->paginate(10);
         return view('production.finishgoodsproducts.index')->with(compact('products'));

    }


    public function create()
    {
        return view('production.finishgoodsproducts.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            // 'title' => 'required',

            'title' => 'required|unique:finishproduct,title|max:255',


            // 'title' => 'required|unique:rawbrand,title|max:255',
            'descp' => 'required',
        ]);

        Finishproduct::create([
            'title' => request()->get('title'),
            'descp' =>request()->get('descp'),
        ]);
        return redirect()->to(route('finishgoodsproducts.index'))->with('success', 'Brand Added successfully.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        // $rawBrands=Rawbrand::all();
        $product=Finishproduct::find($id);
        return view('production.finishgoodsproducts.edit')->with(compact('product'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            // 'Date' => 'required',
            'title' => 'required|unique:finishproduct,title|max:255',

            // 'qty' => 'required',
            'descp' => 'required',
        ]);

        $product=Finishproduct::find($id);

        $product->update([
            // 'date' => request()->get('Date'),
            'title' =>request()->get('title'),
            // 'qty' =>request()->get('qty'),
            'descp' =>request()->get('descp'),
        ]);
        return redirect()->to(route('finishgoodsproducts.index'))->with('success', 'Brand Added successfully.');
    }

    public function destroy(string $id)
    {
        $product = Finishproduct::find($id);
        $product->delete();
        return redirect()->to(route('finishgoodsproducts.index'));
    }

    public function search (Request $request)
    {
        $searchQuery=$request->input('search');


        $records=Finish::where(function($query) use ($searchQuery){
                $query->where('title','LIKE',"%{$searchQuery}%")
                ->orWhere('title','LIKE',"%{$searchQuery}%");
                })->paginate(8);


return view('production.finishgoodsproducts.view',compact('searchQuery','records'));
    }
}
