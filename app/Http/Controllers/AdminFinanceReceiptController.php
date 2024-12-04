<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receipt;

class AdminFinanceReceiptController extends Controller
{
    public function index(){

        $receipts = Receipt::orderBy('id','DESC')->paginate(10);
        return view('admin.finance.receipt.index')->with(compact('receipts'));
    }

    public function create(){

        return view('admin.finance.receipt.add');
    }

    public function store(Request $request){

        $this->validate(request(),[
            'descp' => 'required',
            'date' => 'required|date',
            'price' => 'required',
            'qty' => 'required',
            'total' => 'required',
        ]);

        Receipt::create ([

           'descp'=> $request->get('descp'),
           'qty' => $request->get('qty'),
           'price' => $request->get('price'),
           'date' => $request->get('date'),
           'total' => $request->get('total'),

        ]);
        return redirect()->to('/admin/finance/receipt')->with('success', 'Receipt Add successfully.');
    }

    public function edit(string $id){

        $receipt = Receipt::find($id);

        return view('finance.receipt.edit')->with(compact('receipt'));

    }

    public function update(Receipt $receipt, string $id){

        $this->validate(request(), [
            'descp' => 'required',
            'date' => 'required|date',
            'price' => 'required',
            'qty' => 'required',
            'total' => 'required',
        ]);

        $receipt = Receipt::find($id);

        $receipt->update([
            'descp'=> request()->get('descp'),
           'qty' => request()->get('qty'),
           'price' => request()->get('price'),
           'date' => request()->get('date'),
           'total' => request()->get('total'),
        ]);
         return redirect()->to('/admin/finance/receipt')->with('success', 'Receipt Update successfully.');

    }

    public function destroy(string $id){

        $receipt = Receipt::find($id);
        $receipt->delete();
        return redirect()->to('/admin/finance/receipt')->with('success', 'Receipt Delete successfully.');

    }
}
