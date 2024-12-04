<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StoreRawBrand;
class StoreRawBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $RawBrands = StoreRawBrand::orderBy('id','DESC')->paginate(10);
        return view('store.rawbrand.index',compact('RawBrands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('store.rawbrand.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'Date' => 'required',
            'title' => 'required|unique:_raw_brand,title|max:255',
            'slug' => 'required',
            'descp' => 'required',
        ]);

        StoreRawBrand::create([
            'date' => request()->get('Date'),
            'title' =>request()->get('title'),
            'slug' =>request()->get('slug'),
            'descp' =>request()->get('descp'),
        ]);
        return redirect()->to(route('raw-materialBrand.index'))->with('success', 'Brand Added successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $RawBrand=StoreRawBrand::find($id);
        return view('store.rawbrand.edit',compact('RawBrand'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'Date' => 'required',
            'title' => 'required|unique:_raw_brand,title|max:255',
            'slug' => 'required',
            'descp' => 'required',
        ]);


        $RawBrand=StoreRawBrand::find($id);
        $RawBrand->update([
            'date' => request()->get('Date'),
            'title' =>request()->get('title'),
            'slug' =>request()->get('slug'),
            'descp' =>request()->get('descp'),
        ]);
        return redirect()->to(route('raw-materialBrand.index'))->with('success', 'Brand Added successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $RawBrand = StoreRawBrand::find($id);
        $RawBrand->delete();
        return redirect()->to(route('raw-materialBrand.index'));
    }

    public function search (Request $request)
    {
        $searchQuery=$request->input('search');


        $records=StoreRawBrand::where(function($query) use ($searchQuery){
                $query->where('title','LIKE',"%{$searchQuery}%")
                ->orWhere('title','LIKE',"%{$searchQuery}%");
                })->paginate(8);


return view('store.rawbrand.vieww',compact('searchQuery','records'));
    }
}
