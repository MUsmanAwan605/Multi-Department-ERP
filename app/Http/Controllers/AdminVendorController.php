<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor;

class AdminVendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vendors = Vendor::orderBy('id','DESC')->paginate(10);
        return view("admin.store.vendor.index")->with(compact('vendors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.store.vendor.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            // 'name' => 'required',
            // 'contact' => 'required',
           'name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'contact' => 'required|digits:11|max:11',
            // 'email' => 'required|email',
            'email' => 'required|unique:Vendor,email',
            'address' => 'required',

        ]);
        Vendor::create([
            'name' => request()->get('name'),
            'contact' => request()->get('contact'),
            'email' => request()->get('email'),
            'address' => request()->get('address'),
        ]);
        // return redirect()->to('/admin/vendor')->with('success', 'Vender Added successfully.');
        return redirect()->to(route('adminvendor.index'))->with('success', 'Vender Add successfully.');;

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
        $vendor = Vendor::find($id);
        return view('/admin/store/vendor/edit')->with(compact('vendor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate(request(), [
            'name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'contact' => 'required|digits:11|max:11',
            'email' => 'required|email',
            'address' => 'required',

        ]);
        $vendor = Vendor::find($id);
        $vendor->update([
            'name' => request()->get('name'),
            'contact' => request()->get('contact'),
            'email' => request()->get('email'),
            'address' => request()->get('address'),
        ]);
        return redirect()->to('/admin/store/vendor')->with('success', 'Vender Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vendor = Vendor::find($id);
        $vendor->delete();
        return redirect()->to('/admin/store/vendor')->with('success', 'Vender Deleted successfully.');
    }

    public function search (Request $request)
    {
        $searchQuery=$request->input('search');


        $records=Vendor::where(function($query) use ($searchQuery){
                $query->where('name','LIKE',"%{$searchQuery}%")
                ->orWhere('contact','LIKE',"%{$searchQuery}%");
                })->paginate(8);


return view('admin.store.vendor.view',compact('searchQuery','records'));
    }
}
