<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;

class adminfinanceloanController extends Controller
{
    public function index()
    {

        // $departments=Department::all();
        $Loans=Loan::orderBy('id','desc')->paginate('5');
        return view('admin.finance.loan.index')->with(compact('Loans'));


    }

    public function search_data(Request $request){

        // $data = $request->input('search');
        // $records = Loan::where('sno', 'LIKE',  "%{$data}%")->paginate(8);
        // return view('hr.loan.view', ['records' => $records, 'data' => $data]);
            // dd($data,$records);

            $searchQuery = $request->input('search');

            $records = Loan::where(function ($query) use ($searchQuery) {
                $query->where('sno', 'LIKE', "%{$searchQuery}%")
                      ->orWhere('name', 'LIKE', "%{$searchQuery}%");
            })->paginate(8);

return view('admin.finance.loan.view', compact('records', 'searchQuery'));
        }

}
