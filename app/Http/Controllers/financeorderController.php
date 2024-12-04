<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Purchaseorder;
use App\Models\Department;

class financeorderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $purchaseorders=Purchaseorder::process('id','asc')->paginate(10);
        return view('finance.purchaseorder.index')->with(compact('purchaseorders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments=Department::orderby('id','asc')->paginate(10);
        return view('finance.purchaseorder.add')->with(compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation Start //

        // $this->validate(request(),[
        //     'Purchase_Order' => 'required|string|max:255',
        //     'date' => 'required|date',
        //     'PO_Status' => 'nullable|string|max:255',
        //     'Requisition' => 'nullable|string|max:255',
        //     'Requisition_Date' => 'nullable|date',
        //     'Requisition_Dept' => 'nullable|string|max:255',
        //     'Vendor_No' => 'nullable|string|max:255',
        //     'Company_Name' => 'nullable|string|max:255',
        //     'Address' => 'nullable|string|max:255',
        //     'Telephone' => 'nullable|string|max:50',
        //     'Email' => 'nullable|email|max:255',
        //     'NTN' => 'nullable|string|max:50',
        //     'Contact_Person' => 'nullable|string|max:255',
        //     'Contact_Person_No' => 'nullable|string|max:50',
        //     'Company' => 'nullable|string|max:255',
        //     'Sales_Tax_Registration_Number' => 'nullable|string|max:50',
        //     'NTNn' => 'nullable|string|max:50',
        //     'Material_Code' => 'nullable|string|max:255',
        //     'Including_GST' => 'nullable|numeric',
        //     'Delivery_Date' => 'nullable|date',
        //     'Quantity' => 'nullable|numeric',
        //     'Unit_of_Measurement' => 'nullable|string|max:50',
        //     'Unit_Price' => 'nullable|numeric',
        //     'Excluding_GST' => 'nullable|numeric',
        //     'GST' => 'nullable|numeric',
        //     'Material_Description' => 'nullable|string|max:255',
        // ]);


        Purchaseorder::create([
            'po'=>$request->get('Purchase_Order'),
            'date'=>$request->get('date'),
            'postatus'=>$request->get('PO_Status'),
            'Requisition'=>$request->get('Requisition'),
            'Requisition_Date'=>$request->get('Requisition_Date'),
            'Requisition_Dept'=>$request->get('Requisition_Dept'),
            'V_No'=>$request->get('Vendor_No'),

            'Company_Name'=>$request->get('Company_Name'),
            'Addres'=>$request->get('Address'),
            'Telephone'=>$request->get('Telephone'),
            'Email'=>$request->get('Email'),
            'NTN'=>$request->get('NTN'),
            'Contact_Person'=>$request->get('Contact_Person'),
            'Contact_Person_No'=>$request->get('Contact_Person_No'),
            'c_name'=>$request->get('Company'),
            'Address'=>$request->get('Address'),
            'strn'=>$request->get('Sales_Tax_Registration_Number'),
            'NTNn'=>$request->get('NTNn'),
            'm_Code'=>$request->get('Material_Code'),

            'IncludingGST'=>$request->get('Including_GST'),
            'DeliveryDate'=>$request->get('Delivery_Date'),
            'QTY'=>$request->get('Quantity'),
            'UoM'=>$request->get('Unit_of_Measurement'),
            'Unit_Price'=>$request->get('Unit_Price'),
            'Excluding_GST'=>$request->get('Excluding_GST'),
            'GST'=>$request->get('GST'),
            'M_Descp'=>$request->get('Material_Description'),

        ]);

        return redirect()->to('finance/purchaseorders');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $purchaseorders=Purchaseorder::find($id);

        return view('finance.purchaseorder.edit')->with(compact('purchaseorders'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validation Start //
        $this->validate(request(),[

            'ordrnum'=>'required',
            'title'=>'required',
            // 'raw'=>'required',
            // 'amount'=>'required|integer',
            'qty'=>'required|integer',
            'department'=>'required|not_in:none',
            'date'=>'required',

        ]);


        $purchaseorders=Purchaseorder::find($id);


        $purchaseorders->update([
            'ordrnum'=>$request->get('ordrnum'),
            'title'=>$request->get('title'),
            'raw'=>$request->get('raw'),
            'amount'=>$request->get('amount'),
            'qty'=>$request->get('qty'),
            'department'=>$request->get('department'),
            'date'=>$request->get('date'),

        ]);

        return redirect()->route('finance.orders.index');
        // if ($purchaseorders->status=='process') {
        //     return redirect()->to('finance/purchaseorders');
        //  } else {
        //     return redirect()->to('finance/purchaseorder/confirmed');

        //  }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $purchaseorders=Purchaseorder::find($id);
            $purchaseorders->delete();
            // if ($purchaseorders->status=='process') {
            //     return redirect()->to('finance/purchaseorders');
            //  } else {
            //     return redirect()->to('finance/purchaseorder/confirmed');

            //  }
            return redirect()->to('finance.orders.index');
    }

    public function search_order(Request $request)
    {
        // $query = $request->input('q');

        $searchQuery=$request->input('search');

        $records=Purchaseorder::where(function($query) use ($searchQuery) {
        $query->where('title','LIKE',"%{$searchQuery}%")
        ->orWhere('id','LIKE',"%{$searchQuery}%");
        })->paginate(8);

        return view('finance.purchaseorder.view',compact('searchQuery','records'));
    }
    public function showConfirmedOrders()
    {
        $purchaseorders = PurchaseOrder::where('status', 'Confirmed')->paginate(10);
        return view('finance.purchaseorder.orderconfirmed', compact('purchaseorders'));
    }


    public function updateStatus($id)
{
    $purchaseorders = PurchaseOrder::find($id);

    if ($purchaseorders) {
        $purchaseorders->status = 'Confirmed';
        $purchaseorders->save();

        return redirect()->route('purchase-orders.confirmed')->with('success', 'Order confirmed successfully.');
    }

    return redirect()->route('purchase-orders.index')->with('success', 'Order not found.');
}






















































































//     public function orderconfirmed()
//     {
//         $purchaseorders=Purchaseorder::confirmed('id','asc')->paginate(10);
//         return view('finance.purchaseorder.orderconfirmed')->with(compact('purchaseorders'));
//     }
//     public function confirmOrder($id)
//     {
//         $purchaseorders = Purchaseorder::find($id);
//         if (!$purchaseorders) {
//             return response()->json(['error' => 'Order not found.'], 404);
//         }


//         $purchaseorders->status = 'confirmed';
//         $purchaseorders->save();

//         return response()->json(['message' => 'Order confirmed successfully.']);
//     }


//     public function updateStatus()
// {
//     $purchaseorders = PurchaseOrder::where('status', 'Confirmed')->get();
//     return view('finance.purchaseorder.orderconfirmed', compact('purchaseorders'));
// }

}
