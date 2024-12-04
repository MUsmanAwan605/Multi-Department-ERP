<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rawmaterial;
use App\Models\RawmaterialAdd;


class AdminRawMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rawmaterials=Rawmaterial::orderBy('id','DESC')->paginate(10);
        return view("admin.store.rawmaterial.index")->with(compact('rawmaterials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $addraws=RawmaterialAdd::all();
       return view('admin.store.rawmaterial.add' ,compact('addraws'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            's_no' => 'required',
            'date' => 'required|date',
            'Title' => 'required',
            'dscp' => 'required',
            'd_c' => 'required',
            'qty_in' => 'required|numeric',
        ]);

        $rawMaterial = Rawmaterial::where('Title', $request->input('Title'))->first();

        if ($rawMaterial) {
            $rawMaterial->update([
                's_no' => $request->input('s_no'),
                'dscp' => $request->input('dscp'),
                'date' => $request->input('date'),
                'd_c' => $request->input('d_c'),
                'qty_in' => $rawMaterial->qty_in + $request->input('qty_in'), // Increment qty_in
                // 'qty_out' => $request->input('qty_out'),
                // 'blc' => $request->input('blc'),
            ]);
        } else {
            Rawmaterial::create([
                's_no' => $request->input('s_no'),
                'Title' => $request->input('Title'),
                'dscp' => $request->input('dscp'),
                'date' => $request->input('date'),
                'd_c' => $request->input('d_c'),
                'qty_in' => $request->input('qty_in'),
                // 'qty_out' => $request->input('qty_out'),
                // 'blc' => $request->input('blc'),
            ]);
        }

        return redirect()->route('adminraw-material.index');
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
        $rawmaterial = Rawmaterial::find($id);
        return view("admin.store.rawmaterial.edit")->with(compact('rawmaterial'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate(request(), [
            's_no' => 'required',
            'date' => 'required|date',
            'dscp' => 'required',
            'd_c' => 'required',
            'qty_in' => 'required',
            // 'qty_out' => 'required',
            // 'blc' => 'required',

        ]);
        $rawmaterial=Rawmaterial::find($id);
        $rawmaterial->update([
        's_no'=>request()->get('s_no'),
        'dscp' =>request()->get('dscp'),
        'date' =>request()->get('date'),
        'd_c'=>request()->get('d_c'),
        'qty_in' =>request()->get('qty_in'),
        // 'qty_out' =>request()->get('qty_out'),
        // 'blc'=>request()->get('blc')
        ]);
        return redirect()->to(route('adminraw-material.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rawmaterial = Rawmaterial::find($id);
        $rawmaterial->delete();
        return redirect()->to(route('adminraw-material.index'));
    }


    public function search(Request $request){


        $searchQuery=$request->input('search');

        $records=Rawmaterial::where(function($query) use ($searchQuery) {
        $query->where('s_no','LIKE',"%{$searchQuery}%")
        ->orWhere('Title','LIKE',"%{$searchQuery}%");
        });

        return view('admin.store.rawmaterial.vieww',compact('searchQuery','records'));
    }




}
