<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;

class AdminHrdepartmentsCOntroller extends Controller
{
    public function index()
    {
        $departments=Department::orderby('id', 'desc')->paginate(10);
        return view('admin.humanresources.departments.index')->with(compact('departments'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.humanresources.departments.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this ->validate(request(),[
            'name' => 'required',
            'description' => 'required',
        ]);


        Department::create([
            'name' => request()->get('name'),
            'description' =>request()->get('description'),
        ]);
        return redirect()->route('admin.humanresources.departments.index')->with('success', 'Department added successfully.');
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
        $department=Department::find($id);
        return view('admin.humanresources.departments.edit',compact('department'));

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

        $department=Department::find($id);

        $department->update([
            'name' => request()->get('name'),
            'description' =>request()->get('description'),
        ]);
        return redirect()->route('admin.humanresources.departments.index')->with('success', 'Department Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $depart=Department::find($id);
        $depart->delete();
        return redirect()->route('admin.humanresources.departments.index')->with('success', 'Department Delete successfully.');
    }
}
