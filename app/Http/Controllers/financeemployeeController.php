<?php

namespace App\Http\Controllers;

use App\Models\Currentjob;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\hiring;

class financeemployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

        public function index()
    {
        $currentJobs=Employee::all();
        $hirings=Employee::orderby('id', 'desc')->paginate(5);
        // $departments=Department::all();

        return view('finance.employees.index',compact('currentJobs','hirings'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function search_hiring(Request $request)
    {
        // $query = $request->input('q');

        $searchQuery=$request->input('search');

        $records=hiring::where(function($query) use ($searchQuery) {
        $query->where('fname','LIKE',"%{$searchQuery}%")
        ->orWhere('id','LIKE',"%{$searchQuery}%");
        })->paginate(8);

        return view('finance.employees.view',compact('searchQuery','records'));
    }
}
