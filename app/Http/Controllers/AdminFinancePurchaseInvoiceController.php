<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FinancePurchaseInvoice;
use App\Models\Department;

class AdminFinancePurchaseInvoiceController extends Controller
{
    public function index(){

        $purchase_invoices = FinancePurchaseInvoice::orderBy('id','DESC')->paginate(10);
        return view('admin.finance.purchase_invoice.index')->with(compact('purchase_invoices'));

    }

    public function create(){
$departments=Department::all();

        return view('admin.finance.purchase_invoice.add',compact('departments'));
    }

    public function store(Request $request){

        $this -> validate(request(),[

            'purchase_invoice' => 'required',
            'date' => 'required',
            'Department' => 'required',
            'descp' => 'required',
            'qty' => 'required',
            'price' => 'required',
            'total' => 'required',
        ]);

        FinancePurchaseInvoice::create([

            'purchase_invoice' => request()->get('purchase_invoice'),
            'date' => request()->get('date'),
            'depart' => request()->get('Department'),
            'descp' => request()->get('descp'),
            'qty' => request()->get('qty'),
            'price' => request()->get('price'),
            'total' => request()->get('total'),
        ]);
        return redirect()->to('/admin/finance/purchase_invoice')->with('success', 'Purchase Invoice Add successfully.');;
    }

    public function edit(string $id){
$departments=Department::all();

        $purchase_invoice = FinancePurchaseInvoice::find($id);
        return view('admin.finance.purchase_invoice.edit')->with(compact('purchase_invoice','departments'));
    }

    public function update(Request $request, String $id){

        $this -> validate(request(),[

            'purchase_invoice' => 'required',
            'date' => 'required',
            'Department' => 'required',
            'descp' => 'required',
            'qty' => 'required',
            'price' => 'required',
            'total' => 'required',
        ]);

        $purchase_invoice = FinancePurchaseInvoice::find($id);
        $purchase_invoice->update([

            'purchase_invoice' => request()->get('purchase_invoice'),
            'date' => request()->get('date'),
            'depart' => request()->get('Department'),
            'descp' => request()->get('descp'),
            'qty' => request()->get('qty'),
            'price' => request()->get('price'),
            'total' => request()->get('total'),
        ]);
        return redirect()->to('/admin/finance/purchase_invoice')->with('success', 'Purchase Invoice Update successfully.');
    }

    public function destroy(string $id){

        $purchase_invoice = FinancePurchaseInvoice::find($id);
        $purchase_invoice-> delete;
        return redirect()->to('/admin/finance/purchase_invoice')->with('success', 'Purchase Invoice Delete successfully.');

    }
}
