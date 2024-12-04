<?php

namespace App\Http\Controllers;

use App\Models\Rawmaterial;
use Illuminate\Http\Request;

class rawmaterialController extends Controller
{
    public function index(){

        $rawmaterials=Rawmaterial::orderby('id', 'desc')->paginate(10);
         return view('production.rawmaterial.index')->with(compact('rawmaterials'));

    }

    public function create()
    {
        return view('production.rawmaterial.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'Date'=>'required',
            // 'title' => 'required|unique:rawbrand,title|max:255',
            'qty' => 'required',
            'descp' => 'required',
        ]);

        Rawmaterial::create([
            'title' => request()->get('title'),
            'qty' =>request()->get('qty'),
            'date' =>request()->get('Date'),
            'descp' =>request()->get('descp'),
        ]);
        return redirect()->to(route('rawmaterial.index'))->with('success', 'Rawmaterial Added successfully.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        // $rawBrands=Rawbrand::all();
        $rawmaterial=Rawmaterial::find($id);
        return view('production.rawmaterial.edit')->with(compact('rawmaterial'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'Date' => 'required',
            'title' => 'required|max:255',
            'qty' => 'required',
            'descp' => 'required',
        ]);

        $rawmaterial=Rawmaterial::find($id);

        $rawmaterial->update([
            'date' => request()->get('Date'),
            'title' =>request()->get('title'),
            'qty' =>request()->get('qty'),
            'descp' =>request()->get('descp'),
        ]);
        return redirect()->to(route('rawmaterial.index'))->with('success', 'Rawmaterial Update successfully.');
    }

    public function destroy(string $id)
    {
        $rawmaterial = Rawmaterial::find($id);
        $rawmaterial->delete();
        return redirect()->to(route('rawmaterial.index'))->with('success', 'Rawmaterial Delete successfully.');
    }

    public function search (Request $request)
    {
        $searchQuery=$request->input('search');


        $records=Rawmaterial::where(function($query) use ($searchQuery){
                $query->where('title','LIKE',"%{$searchQuery}%")
                ->orWhere('title','LIKE',"%{$searchQuery}%");
                })->paginate(8);


return view('production.rawmaterial.view',compact('searchQuery','records'));
    }

}
