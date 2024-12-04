<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Department;

class AdminFinancePaymentController extends Controller
{
    public function index(){

        $payments = Payment::OrderBy('id','DESC')->paginate(10);
        return view('admin.finance.payment.index')->with(compact('payments'));
    }

    public function create(){
        $departments=Department::all();
        return view('admin.finance.payment.add',compact('departments'));
    }

    public function store(Request $request){

        $this->validate(request(),[

            'payment' => 'required',
            'date' => 'required|date',
            'Department' => 'required',
            'descp' => 'required',

        ]);

        Payment::create([
            'payment' => $request->get('payment'),
            'date' => $request->get('date'),
            'depart' => $request->get('Department'),
            'descp' => $request->get('descp'),
        ]);
        return redirect()->to('/admin/finance/payment')->with('success', 'Payment Add successfully.');;
    }

    public function edit(string $id){
        $departments=Department::all();
        $payment = Payment::find($id);
        return view('admin.finance.payment.edit')->with(compact('payment','departments'));
    }

    public function update(Request $request, string $id){

        $this->validate(request(),[

            'payment' => 'required',
            'date' => 'required|date',
            'Department' => 'required',
            'descp' => 'required',

        ]);

        $payment = Payment::find($id);
        $payment->update([
            'payment' => $request->get('payment'),
            'date' => $request->get('date'),
            'depart' => $request->get('Department'),
            'descp' => $request->get('descp'),
        ]);
        return redirect()->to('/admin/finance/payment')->with('success', 'Payment Add successfully.');
    }

    public function destroy(string $id){

        $payment = Payment::find($id);
        $payment->delete();
        return redirect()->to('/admin/finance/payment')->with('success', 'Payment Add successfully.');
    }


}
