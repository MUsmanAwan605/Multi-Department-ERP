<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FinanceSaleInvoice;
use App\Models\Department;


class AdminFinanceSaleInvoiceController extends Controller
{
    public function index(){

        $sale_invoices = FinanceSaleInvoice::orderBy('id','DESC')->paginate(10);
        return view('admin.finance.sale_invoice.index')->with(compact('sale_invoices'));
    }

    public function create(){
        $departments=Department::all();
        return view('admin.finance.sale_invoice.add',compact('departments'));
    }

    public function store(Request $request){

        $this->validate(request(),[

            'sale_invoice' => 'required',
            'date'  => 'required',
            'Department'  => 'required',
            'descp'  => 'required',
            'qty'  => 'required',
            'price'  => 'required',
            'total'  => 'required',
        ]);

        FinanceSaleInvoice::create([

            'sale_invoice' => request()->get('sale_invoice'),
            'date' => request()->get('date'),
            'depart' => request()->get('Department'),
            'descp' => request()->get('descp'),
            'qty' => request()->get('qty'),
            'price' => request()->get('price'),
            'total' => request()->get('total'),
        ]);
        return redirect()->to((route('admin.finance.sale_invoice.index')))->with('success', 'Sale_invoice Add successfully.');
    }

    public function edit(string $id){
        $departments=Department::all();

        $sale_invoice=FinanceSaleInvoice::find($id);
        return view('admin.finance.sale_invoice.edit')->with(compact('sale_invoice','departments'));
    }

    public function update(Request $request, string $id){

        $this->validate(request(),[

            'sale_invoice' => 'required',
            'date'  => 'required',
            'Department'  => 'required',
            'descp'  => 'required',
            'qty'  => 'required',
            'price'  => 'required',
            'total'  => 'required',
        ]);

        $sale_invoice=FinanceSaleInvoice::find($id);
        $sale_invoice->update([

            'sale_invoice' => request()->get('sale_invoice'),
            'date' => request()->get('date'),
            'depart' => request()->get('Department'),
            'descp' => request()->get('descp'),
            'qty' => request()->get('qty'),
            'price' => request()->get('price'),
            'total' => request()->get('total'),
        ]);
        return redirect()->to((route('admin.finance.sale_invoice.index')))->with('success', 'Sale_invoice Add successfully.');
    }

    public function destroy(string $id){

        $sale_invoice=FinanceSaleInvoice::find($id);
        $sale_invoice->delete();
        return redirect()->to('/admin/finance/sale_invoice')->with('success', 'Sale_invoice Add successfully.');
    }

}
