<?php

namespace App\Http\Controllers;

use App\Models\Rawbrand;
use Illuminate\Http\Request;

class AdminRawbrandController extends Controller
{
    public function index(){
        $rawBrands=Rawbrand::orderby('id', 'desc')->paginate(10);
        return view('admin.store.rawbrand.index')->with(compact('rawBrands'));
    }

    /**
     * Show the form for creating a new resource.
     */


    public function create()
    {
        return view('admin.store.rawbrand.add');
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
        return redirect()->to(route('adminrawbrand.index'))->with('success', 'Brand Added successfully.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        // $rawBrands=Rawbrand::all();
        $rawBrand=Rawbrand::find($id);
        return view('admin.store.rawbrand.edit',compact('rawBrand'));
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
        return redirect()->to(route('adminrawbrand.index'))->with('success', 'Brand Added successfully.');
    }

    public function destroy(string $id)
    {
        $rawBrand = Rawbrand::find($id);
        $rawBrand->delete();
        return redirect()->to(route('adminrawbrand.index'))->with('success', 'Brand Delete successfully.');
    }



    public function search (Request $request)
    {
        $searchQuery=$request->input('search');


        $records=RawBrand::where(function($query) use ($searchQuery){
                $query->where('title','LIKE',"%{$searchQuery}%")
                ->orWhere('title','LIKE',"%{$searchQuery}%");
                })->paginate(8);


return view('admin.store.rawbrand.vieww',compact('searchQuery','records'));
    }





}
