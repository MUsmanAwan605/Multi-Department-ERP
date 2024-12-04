<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchaseorder;
use App\Models\Department;

class adminfinanceorderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $purchaseorders=Purchaseorder::process('id','asc')->paginate(10);
        return view('admin.finance.purchaseorder.index')->with(compact('purchaseorders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments=Department::orderby('id','asc')->paginate(10);
        return view('admin.finance.purchaseorder.add')->with(compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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
        Purchaseorder::create([
            'ordrnum'=>$request->get('ordrnum'),
            'title'=>$request->get('title'),
            'raw'=>$request->get('raw'),
            'amount'=>$request->get('amount'),
            'qty'=>$request->get('qty'),
            'department'=>$request->get('department'),
            'date'=>$request->get('date'),


        ]);

        return redirect()->to('admin/finance/purchaseorders');
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

        return view('admin.finance.purchaseorder.edit')->with(compact('purchaseorders'));
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
        if ($purchaseorders->status=='process') {
            return redirect()->to('admin/finance/purchaseorders');
         } else {
            return redirect()->to('admin/finance/purchaseorder/confirmed');

         }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $purchaseorders=Purchaseorder::find($id);
            $purchaseorders->delete();
            if ($purchaseorders->status=='process') {
                return redirect()->to('admin/finance/purchaseorders');
             } else {
                return redirect()->to('admin/finance/purchaseorder/confirmed');

             }
    }

    public function search_order(Request $request)
    {
        // $query = $request->input('q');

        $searchQuery=$request->input('search');

        $records=Purchaseorder::where(function($query) use ($searchQuery) {
        $query->where('title','LIKE',"%{$searchQuery}%")
        ->orWhere('id','LIKE',"%{$searchQuery}%");
        })->paginate(8);

        return view('admin.finance.purchaseorder.view',compact('searchQuery','records'));
    }


    public function orderconfirmed()
    {
        $purchaseorders=Purchaseorder::confirmed('id','asc')->paginate(10);
        return view('admin.finance.purchaseorder.orderconfirmed')->with(compact('purchaseorders'));
    }
    public function confirmOrder($id)
    {
        $purchaseorders = Purchaseorder::find($id);
        if (!$purchaseorders) {
            return response()->json(['error' => 'Order not found.'], 404);
        }


        $purchaseorders->status = 'confirmed';
        $purchaseorders->save();

        return response()->json(['message' => 'Order confirmed successfully.']);
    }
}
