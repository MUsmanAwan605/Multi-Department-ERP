<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subsupplier;


class AdminSubsupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subsuppliers = Subsupplier::orderBy('id','DESC')->paginate(10);
        return view("admin.store.subsupplier.subsupplier.index")->with(compact('subsuppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.store.subsupplier.subsupplier.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'spname' => 'required|regex:/^[a-zA-Z\s]+$/',
            'contact' =>'required|digits:11|max:11',
            'email' => 'required|unique:subsupplier,email|max:100',
            'address' => 'required',
            'cname' => 'required',

        ]);
        Subsupplier::create([
            'spname' => request()->get('spname'),
            'contact' => request()->get('contact'),
            'email' => request()->get('email'),
            'address' => request()->get('address'),
            'cname' => request()->get('cname'),
        ]);
        return redirect()->to(route('adminsubsupplier.index'))->with('success', 'Subsupplier Add successfully.');
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
        $subsupplier = Subsupplier::find($id);
        return view('admin.store.subsupplier.subsupplier.edit')->with(compact('subsupplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate(request(), [
           'spname' => 'required|regex:/^[a-zA-Z\s]+$/',
            'contact' =>'required|digits:11|max:11',
            'email' => 'required|email',
            'address' => 'required',
            'cname' => 'required',

        ]);
        $subsupplier = Subsupplier::find($id);
        $subsupplier->update([
            'spname' => request()->get('spname'),
            'contact' => request()->get('contact'),
            'email' => request()->get('email'),
            'address' => request()->get('address'),
            'cname' => request()->get('cname'),
        ]);
        return redirect()->to(route('adminsubsupplier.index'))->with('success', 'SubSupplier Updated successfully.');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subsupplier = Subsupplier::find($id);
        $subsupplier->delete();
        return redirect()->to(route('adminsubsupplier.index'))->with('success', 'Subsupplier Delete successfully.');
    }

    public function search (Request $request)
    {
        $searchQuery=$request->input('search');


        $records=Subsupplier::where(function($query) use ($searchQuery){
                $query->where('spname','LIKE',"%{$searchQuery}%")
                ->orWhere('cname','LIKE',"%{$searchQuery}%");
                })->paginate(8);


return view('admin.store.subsupplier.subsupplier.view',compact('searchQuery','records'));
    }
}
