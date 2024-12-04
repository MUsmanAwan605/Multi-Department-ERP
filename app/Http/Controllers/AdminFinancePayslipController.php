<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FinancePayslip;
use App\Models\Department;

class AdminFinancePayslipController extends Controller
{
    public function index(){

        $payslips = FinancePayslip::OrderBy('id','DESC')->paginate(10);
        return view('admin.finance.payslip.index')->with(compact('payslips'));
    }

    public function create(){
        $departments=Department::all();
        return view('admin.finance.payslip.add',compact('departments'));
    }

    public function store(Request $request){

        $this->validate(request(), [
            'e_name' => 'required',
            'e_id' => 'required',
            'Department' => 'required',
            'desig' => 'required',
            'date' => 'required|date',
            'b_salary' => 'required',
            'allowances' => 'required',
            'g_salary' => 'required',
            'deduct' => 'required',
            'n_salary' => 'required',
        ]);

        FinancePayslip::create([
            'e_name' => $request->get('e_name'),
            'e_id'  => $request->get('e_id'),
            'depart' => $request->get('Department'),
            'desig' => $request->get('desig'),
            'date' => $request->get('date'),
            'b_salary' => $request->get('b_salary'),
            'allowances' => $request->get('allowances'),
            'g_salary' => $request->get('g_salary'),
            'deduct' => $request->get('deduct'),
            'n_salary' => $request->get('n_salary'),
        ]);
        return redirect()->to('/admin/finance/payslip')->with('success', 'Payslip Add successfully.');

    }

    public function edit(string $id){
        $departments=Department::all();
        $payslip =FinancePayslip::find($id);
        return view('admin.finance.payslip.edit')->with(compact('payslip','departments'));
    }

    public function update(Request $request, string $id){

        $this->validate(request(), [
            'e_name' => 'required',
            'e_id' => 'required|integer',
            'Department' => 'required',
            'desig' => 'required',
            'date' => 'required|date',
            'b_salary' => 'required',
            'allowances' => 'required',
            'g_salary' => 'required',
            'deduct' => 'required',
            'n_salary' => 'required',
        ]);

        $payslip =FinancePayslip::find($id);
        $payslip->update([
            'e_name' => $request->get('e_name'),
            'e_id'  => $request->get('e_id'),
            'Department' => $request->get('depart'),
            'desig' => $request->get('desig'),
            'date' => $request->get('date'),
            'b_salary' => $request->get('b_salary'),
            'allowances' => $request->get('allowances'),
            'g_salary' => $request->get('g_salary'),
            'deduct' => $request->get('deduct'),
            'n_salary' => $request->get('n_salary'),
        ]);
        return redirect()->to('/admin/finance/payslip')->with('success', 'Payslip Update successfully.');
    }

    public function destroy(string $id){

        $payslip = FinancePayslip::find($id);
        $payslip->delete();
        return redirect()->to('/admin/finance/payslip')->with('success', 'Payslip Delete successfully.');
    }
}
