<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quality\Inspector\TotalInspection;

class AdminQATotalInspectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totals = TotalInspection::orderBy('id','DESC')->paginate(8);
        return view('admin.inspectors.total.index')->with(compact('totals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.inspectors.total.add');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $this->validate($request,[
            'month' => 'required',
            'part_name' => 'required|not_in:none',
            'ttl_inspct' => 'required'
        ]);
        TotalInspection::create([
            'month' => $request->get('month'),
            'part_name' => $request->get('part_name'),
            'ttl_inspct' => $request->get('ttl_inspct')
        ]);

        return redirect()->to('admin/total/inspectors');

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
        $total = TotalInspection::find($id);
        return view('admin.inspectors.total.edit')->with(compact('total'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'month' => 'required',
            'part_name' => 'required|not_in:none',
            'ttl_inspct' => 'required'
        ]);
        $total = TotalInspection::find($id);

        $total->update([
            'month' => $request->get('month'),
            'part_name' => $request->get('part_name'),
            'ttl_inspct' => $request->get('ttl_inspct')
        ]);

        return redirect()->to('admin/total/inspectors')->with('success', 'Item updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $total = TotalInspection::find($id);
        $total->delete();
        return redirect()->to('admin/total/inspectors');
    }
}
