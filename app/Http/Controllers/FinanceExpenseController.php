<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\Department;
use Illuminate\Http\Request;

class FinanceExpenseController extends Controller
{
    public function index(){

        $expenses = Expense::OrderBy('id','DESC')->paginate(10);
        return view('finance.expense.index')->with(compact('expenses'));
    }

    public function create(){

        $departments=Department::all();
        return view('finance.expense.add',compact('departments'));
    }
    public function store(Request $request){

        $this->validate(request(),[
            'expense' => 'required',
            'date' => 'required|date',
            'Department' => 'required',
            'descp' => 'required',
        ]);

        Expense::create([
            'expense' => $request->get('expense'),
            'date' => $request->get('date'),
            'depart' => $request->get('Department'),
            'descp' => $request->get('descp'),
        ]);
        return redirect()->to('/finance/expense')->with('success', 'Expense Add successfully.');

    }

    public function edit(string $id){

        $departments=Department::all();
        $expense = Expense::find($id);
        return view('finance.expense.edit',compact('departments'))->with(compact('expense'));

    }


    public function update(Request $request, string $id){


    $this->validate(request(),[
        'expense' => 'required',
        'date' => 'required|date',
        'Department' => 'required',
        'descp' => 'required',
    ]);

        $expense = Expense::find($id);

        $expense->update([
            'expense' => $request->get('expense'),
            'date' => $request->get('date'),
            'depart' => $request->get('Department'),
            'descp' => $request->get('descp'),
        ]);
        return redirect()->to('/finance/expense')->with('success', 'Expense Update successfully.');
    }

    public function destroy(string $id){

        $expense = Expense::find($id);
        $expense->delete();
        return redirect()->to('/finance/expense')->with('success', 'Expense Delete successfully.');

    }
}
