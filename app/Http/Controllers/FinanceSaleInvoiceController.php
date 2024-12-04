<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FinanceSaleInvoice;
use App\Models\Department;

class FinanceSaleInvoiceController extends Controller
{
    public function index(){

        $sale_invoices = FinanceSaleInvoice::orderBy('id','DESC')->paginate(10);
        return view('finance.sale_invoice.index')->with(compact('sale_invoices'));
    }

    public function create(){

        $departments=Department::all();
        return view('finance.sale_invoice.add',compact('departments'));
    }

    public function store(Request $request){



        $this->validate(request(),[

            'sale_invoice' => 'required',
            'date'  => 'required',
            'descp'  => 'required',
            'qty'  => 'required',
            'Price'  => 'required',
            'gst' => 'required|numeric'

        ]);


    $qty = (float) $request->get('qty');
    $price = (float) $request->get('Price');
    $gstPercentage = (float) $request->get('gst');

    $total = $qty * $price;

    // Convert GST percentage to amount
    $gstAmount = ($gstPercentage / 100) * $total;

    // Calculate final total including GST
    $totalWithGst = $total + $gstAmount;

    // Save to the database
    FinanceSaleInvoice::create([
        'sale_invoice' => $request->get('sale_invoice'),
        'date' => $request->get('date'),
        'descp' => $request->get('descp'),
        'qty' => $qty,
        'price' => $price,
        'gst' => $gstAmount,  // Save GST amount
        'total' => $totalWithGst  // Save total with GST included
    ]);
        return redirect()->to((route('finance.sale_invoice.index')))->with('success', 'Sale_invoice Add successfully.');
    }

    public function edit(string $id){

        $departments=Department::all();
        $sale_invoice=FinanceSaleInvoice::find($id);
        return view('finance.sale_invoice.edit')->with(compact('sale_invoice','departments'));
    }

    public function update(Request $request, string $id){

        $this->validate(request(),[
            'sale_invoice' => 'required',
            'date'  => 'required',
            'descp'  => 'required',
            'qty'  => 'required',
            'Price'  => 'required',
            'gst' => 'required|numeric'

        ]);

        $sale_invoice=FinanceSaleInvoice::find($id);


            // Get the input values and cast to float
    $qty = (float) $request->get('qty');
    $price = (float) $request->get('Price');
    $gstPercentage = (float) $request->get('gst');

    $total = $qty * $price;


    $gstAmount = ($gstPercentage / 100) * $total;


    $totalWithGst = $total + $gstAmount;


    $sale_invoice->update([
        'sale_invoice' => $request->get('sale_invoice'),
        'date' => $request->get('date'),
        'descp' => $request->get('descp'),
        'qty' => $qty,
        'price' => $price,
        'gst' => $gstAmount,
        'total' => $totalWithGst
    ]);
        return redirect()->to((route('finance.sale_invoice.index')))->with('success', 'Sale_invoice Update successfully.');
    }

    public function destroy(string $id){

        $sale_invoice=FinanceSaleInvoice::find($id);
        $sale_invoice->delete();
        return redirect()->to('/finance/sale_invoice')->with('success', 'Sale_invoice Delete successfully.');
    }

}
