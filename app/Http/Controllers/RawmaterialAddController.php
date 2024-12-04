<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RawmaterialAdd;
use App\Models\StoreRawBrand;
class RawmaterialAddController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $rawBrands=StoreRawBrand::all();
       $rproducts = StoreRawBrand::with('rawproduct')->get();
        $rawmaterialadds=RawmaterialAdd::orderby('id', 'desc')->paginate(10);
        return view('store.rawmaterialadd.index')->with(compact('rawmaterialadds','rawBrands', 'rproducts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $rawBrands=StoreRawBrand::all();
        return view('store.rawmaterialadd.add',compact('rawBrands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this ->validate(request(),[
            // 'name' => 'required',
            'product'=> 'required',
            'date' => 'required',
            'brand' => 'required',
            'description' => 'required',
            'qty_in'=> 'required',
        ]);



        RawmaterialAdd::create([

            'date' => request()->get('date'),
            'rbrand_id' => request()->get('brand'),
            'prod' => request()->get('product'),
            'qty_in' => request()->get('qty_in'),
            'description' =>request()->get('description'),
        ]);
        return redirect()->to(route('raw-materialAdd.index'))->with('success', 'RawmaterialAdd Added successfully.');
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
        $rawBrands=StoreRawBrand::all();
        $rawmaterialadd=RawmaterialAdd::find($id);
        return view('store.rawmaterialadd.edit',compact('rawmaterialadd','rawBrands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this ->validate(request(),[
            'name' => 'required',
            'description' => 'required',

        ]);

        $department=RawmaterialAdd::find($id);

        $department->update([
            'name' => request()->get('name'),
            'description' =>request()->get('description'),
        ]);
        return redirect()->to(route('raw-materialAdd.index'))->with('success', 'RawmaterialAdd Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $depart=RawmaterialAdd::find($id);
        $depart->delete();
        return redirect()->to('/hr/rawmaterialadd')->with('success', 'RawmaterialAdd Delete successfully.');
    }

    public function search (Request $request)
    {
        $searchQuery=$request->input('search');


        $records=RawmaterialAdd::where(function($query) use ($searchQuery){
                $query->where('prod','LIKE',"%{$searchQuery}%")
                ->orWhere('prod','LIKE',"%{$searchQuery}%");
                })->paginate(8);


return view('store.rawmaterialadd.view',compact('searchQuery','records'));
    }
}
