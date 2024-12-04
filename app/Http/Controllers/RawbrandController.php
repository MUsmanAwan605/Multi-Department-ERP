<?php

namespace App\Http\Controllers;

use App\Models\Rawbrand;
use Illuminate\Http\Request;

class RawbrandController extends Controller
{
    public function index(){
        $rawBrands=Rawbrand::orderby('id', 'desc')->paginate(10);
        return view('store.rawbrand.index')->with(compact('rawBrands'));
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
            'title' => 'required|unique:rawbrand,title|max:255',
            'slug' => 'required',
            'descp' => 'required',
        ]);

        Rawbrand::create([
            'date' => request()->get('Date'),
            'title' =>request()->get('title'),
            'slug' =>request()->get('slug'),
            'descp' =>request()->get('descp'),
        ]);
        return redirect()->to(route('rawbrand.index'))->with('success', 'Brand Added successfully.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        // $rawBrands=Rawbrand::all();
        $rawBrand=Rawbrand::find($id);
        return view('store.rawbrand.edit',compact('rawBrand'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'Date' => 'required',
            'title' => 'required|max:255',
            'slug' => 'required',
            'descp' => 'required',
        ]);

        $rawBrand=Rawbrand::find($id);

        $rawBrand->update([
            'date' => request()->get('Date'),
            'title' =>request()->get('title'),
            'slug' =>request()->get('slug'),
            'descp' =>request()->get('descp'),
        ]);
        return redirect()->to(route('rawbrand.index'))->with('success', 'Brand Added successfully.');
    }

    public function destroy(string $id)
    {
        $rawBrand = Rawbrand::find($id);
        $rawBrand->delete();
        return redirect()->to(route('rawbrand.index'));
    }



    public function search (Request $request)
    {
        $searchQuery=$request->input('search');


        $records=RawBrand::where(function($query) use ($searchQuery){
                $query->where('title','LIKE',"%{$searchQuery}%")
                ->orWhere('title','LIKE',"%{$searchQuery}%");
                })->paginate(8);


return view('store.rawbrand.vieww',compact('searchQuery','records'));
    }





}
