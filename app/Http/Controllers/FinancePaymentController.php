<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Department;

class FinancePaymentController extends Controller
{
    public function index(){

        $payments = Payment::OrderBy('id','DESC')->paginate(10);
        return view('finance.payment.index')->with(compact('payments'));
    }

    public function create(){

        $departments=Department::all();
        return view('finance.payment.add',compact('departments'));
    }

    public function store(Request $request){

        $this->validate(request(),[

            'payment' => 'required',
            'date' => 'required|date',
            'Department' => 'required|not_in:none',
            // 'depart' => 'required',
            'descp' => 'required',

        ]);

        Payment::create([
            'payment' => $request->get('payment'),
            'date' => $request->get('date'),
            'depart' => $request->get('Department'),
            'descp' => $request->get('descp'),
        ]);
        return redirect()->to('/finance/payment');
    }

    public function edit(string $id){
        $departments=Department::all();
        $payment = Payment::find($id);
        return view('finance.payment.edit')->with(compact('payment',
        'departments'));
    }

    public function update(Request $request, string $id){

        $this->validate(request(),[

            'payment' => 'required',
            'date' => 'required|date',
            'Department' => 'required|not_in:none',
            'descp' => 'required',

        ]);

        $payment = Payment::find($id);
        $payment->update([
            'payment' => $request->get('payment'),
            'date' => $request->get('date'),
            'depart' => $request->get('Department'),
            'descp' => $request->get('descp'),
        ]);
        return redirect()->to('/finance/payment');
    }

    public function destroy(string $id){

        $payment = Payment::find($id);
        $payment->delete();
        return redirect()->to('/finance/payment');
    }


}
