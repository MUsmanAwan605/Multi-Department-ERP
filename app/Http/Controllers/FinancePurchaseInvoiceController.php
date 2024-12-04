<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FinancePurchaseInvoice;
use App\Models\Department;

class FinancePurchaseInvoiceController extends Controller
{
    public function index(){

        $purchase_invoices = FinancePurchaseInvoice::orderBy('id','DESC')->paginate(10);
        return view('finance.purchase_invoice.index')->with(compact('purchase_invoices'));

    }

    public function create(){

        $departments=Department::all();
        return view('finance.purchase_invoice.add',compact('departments'));
    }

    public function store(Request $request){

        $this -> validate(request(),[

            'purchase_invoice' => 'required',
            'date' => 'required',
            'descp' => 'required',
            'qty' => 'required',
            'price' => 'required',
            'gst' => 'required|numeric'

        ]);

        $qty = (float) $request->get('qty');
        $price = (float) $request->get('price');
        $gstPercentage = (float) $request->get('gst');

        $total = $qty * $price;

        // Convert GST percentage to amount
        $gstAmount = ($gstPercentage / 100) * $total;

        // Calculate final total including GST
        $totalWithGst = $total + $gstAmount;

        // Save to the database
        FinancePurchaseInvoice::create([
            'purchase_invoice' => $request->get('purchase_invoice'),
            'date' => $request->get('date'),
            'descp' => $request->get('descp'),
            'qty' => $qty,
            'price' => $price,
            'gst' => $gstAmount,  // Save GST amount
            'total' => $totalWithGst  // Save total with GST included
        ]);
        return redirect()->to('/finance/purchase_invoice');
    }

    public function edit(string $id){

        $departments=Department::all();
        $purchase_invoice = FinancePurchaseInvoice::find($id);
        return view('finance.purchase_invoice.edit')->with(compact('purchase_invoice','departments'));
    }

    public function update(Request $request, String $id){

        $this -> validate(request(),[

            'purchase_invoice' => 'required',
            'date' => 'required',
            'descp' => 'required',
            'qty' => 'required',
            'price' => 'required',
            'gst' => 'required|numeric'

        ]);

        $purchase_invoice = FinancePurchaseInvoice::find($id);
        $qty = (float) $request->get('qty');
        $price = (float) $request->get('price');
        $gstPercentage = (float) $request->get('gst');

        $total = $qty * $price;

        // Convert GST percentage to amount
        $gstAmount = ($gstPercentage / 100) * $total;

        // Calculate final total including GST
        $totalWithGst = $total + $gstAmount;

        // Save to the database
        $purchase_invoice->update([
            'purchase_invoice' => $request->get('purchase_invoice'),
            'date' => $request->get('date'),
            'descp' => $request->get('descp'),
            'qty' => $qty,
            'price' => $price,
            'gst' => $gstAmount,  // Save GST amount
            'total' => $totalWithGst  // Save total with GST included
        ]);
        return redirect()->to('/finance/purchase_invoice');
    }

    public function destroy(string $id){

        $purchase_invoice = FinancePurchaseInvoice::find($id);
        $purchase_invoice-> delete();
        return redirect()->to('/finance/purchase_invoice');

    }
}

