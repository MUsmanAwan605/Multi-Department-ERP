<?php

namespace App\Http\Controllers;

use App\Models\Rawbrand;
use Illuminate\Http\Request;
use App\Models\RawMaterialProduct;

class AdminRawMaterialProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $RawProducts = RawMaterialProduct::orderby('id', 'desc')->paginate(10);
        return view('admin.store.rawproduct.index', compact('RawProducts'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rawBrands=Rawbrand::all();
        return view('admin.store.rawproduct.add',compact('rawBrands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'Date' => 'required',
            'brand' => 'required',
            'Product' => 'required|unique:rawmaterialproducts,Prod|max:255',
            'descp' => 'required',
        ]);

        RawMaterialProduct::create([
            'date' => request()->get('Date'),
            'brand_id' =>request()->get('brand'),
            'prod' =>request()->get('Product'),
            'descp' =>request()->get('descp'),
        ]);
        return redirect()->to(route('adminrawmaterialproduct.index'))->with('success', 'Product Added successfully.');
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
        $rawBrands=Rawbrand::all();
        $RawProducts=RawMaterialProduct::find($id);
        return view('admin.store.rawproduct.edit',compact('RawProducts','rawBrands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        $this->validate($request,[
            'Date' => 'required',
            'brand' => 'required',
            'Product' => 'required|max:255',
            'descp' => 'required',
        ]);

        $RawProducts=RawMaterialProduct::find($id);
        $RawProducts->update([
            'date' => request()->get('Date'),
            'brand_id' =>request()->get('brand'),
            'prod' =>request()->get('Product'),
            'descp' =>request()->get('descp'),
        ]);




        return redirect()->to(route('adminrawmaterialproduct.index'))->with('success', 'Product Updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $RawProducts = RawMaterialProduct::find($id);
        $RawProducts->delete();
        return redirect()->to(route('adminrawmaterialproduct.index'));
    }


    public function search (Request $request)
    {
        $searchQuery=$request->input('search');


        $records=RawMaterialProduct::where(function($query) use ($searchQuery){
                $query->where('prod','LIKE',"%{$searchQuery}%")
                ->orWhere('prod','LIKE',"%{$searchQuery}%");
                })->paginate(8);


return view('admin.store.rawproduct.vieww',compact('searchQuery','records'));
    }


}
