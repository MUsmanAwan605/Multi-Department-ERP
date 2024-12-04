<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;
use App\Models\Department;


class AdminFinanceExpenseController extends Controller
{
    public function index(){

        $expenses = Expense::OrderBy('id','DESC')->paginate(10);
        return view('admin.finance.expense.index')->with(compact('expenses'));
    }

    public function create(){
        $departments=Department::all();
        return view('admin.finance.expense.add',compact('departments'));
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
        return redirect()->to('/admin/finance/expense')->with('success', 'Expense Add successfully.');

    }

    public function edit(string $id){
        $departments=Department::all();
        $expense = Expense::find($id);
        return view('admin.finance.expense.edit')->with(compact('expense','departments'));

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
        return redirect()->to('/admin/finance/expense')->with('success', 'Expense Add successfully.');
    }

    public function destroy(string $id){

        $expense = Expense::find($id);
        $expense->delete();
        return redirect()->to('/admin/finance/expense')->with('success', 'Expense Add successfully.');

    }
}
