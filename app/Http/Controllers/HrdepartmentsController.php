<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class HrdepartmentsController extends Controller
{
    public function index()
    {
        $departments=Department::orderby('id', 'desc')->paginate(10);
        return view('hr.departments.index')->with(compact('departments'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Hr.departments.add');

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
        return redirect()->to('/hr/departments')->with('success', 'Department Added successfully.');
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
        return view('Hr.departments.edit',compact('department'));

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
        return redirect()->to('/hr/departments')->with('success', 'Department Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $depart=Department::find($id);
        $depart->delete();
        return redirect()->to('/hr/departments')->with('success', 'Department Delete successfully.');
    }
}
