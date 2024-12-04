<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Currentjob;
use App\Models\Salary;

class adminfinancesalaryController extends Controller
{
    public function index()
    {
        $currentjobs=Currentjob::all();
        $salaries = Salary::orderBy('id', 'desc')->paginate(5);
    return view('admin.finance.salary.index')->with(compact('salaries','currentjobs'));
}

public function search_data(Request $request){

    $searchQuery=$request->input('search');


        $records=Salary::where(function($query) use ($searchQuery){
                $query->where('name','LIKE',"%{$searchQuery}%")
                ->orWhere('emp_id','LIKE',"%{$searchQuery}%");
                })->paginate(8);


return view('admin.finance.salary.view',compact('searchQuery','records'));
        }
}
