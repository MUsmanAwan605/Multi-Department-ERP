<?php

namespace App\Http\Controllers;

use App\Models\Fund;
use App\Models\Department;
use Illuminate\Http\Request;

class FinanceFundController extends Controller
{
    public function index(){

        $funds = Fund::orderBy('id','desc')->paginate(10);
        return view('finance.fund.index')->with(compact('funds'));
    }

    public function create(){

        $departments=Department::all();
        return view('finance.fund.add',compact('departments'));
    }

    public function store(Request $request){

        // $this->validate(request(),[
            $request->validate([
                'fund' => 'required|integer',
                'date' => 'required|date',
                // 'TotalAmount' => 'required|numeric'
            ]);


$new_fund = $request->get('fund');

$last_fund_entry = Fund::latest()->first();

if ($last_fund_entry){
    $updated_total = $last_fund_entry->total + $new_fund;
} else {
    $updated_total = 0;
}

$p_method = $request->get('bank_name') . ' ' . $request->get('cheque_number');

Fund::create([
    'fund' => $new_fund,
    'date' => $request->get('date'),
    'amount' => $request->get('Cash_transaction'),
    'p_method' => $p_method,
    'total' => $updated_total
]);

        return redirect()->to('/finance/fund')->with('success', 'Fund Add successfully.');
    }

    public function edit(string $id)
    {
        $departments=Department::all();
        $fund = Fund::find($id);
        return view('/finance/fund/edit',compact('departments','fund'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate(request(),[
            'fund' => 'required|numeric|regex:/^\d+$/',
            'date' => 'required|date',
            'Department' => 'required|not_in:none',
            'descp' => 'required',

        ]);

        $fund = Fund::find($id);
        $fund->update([
            'fund' => $request->get('fund'),
            'date' => $request->get('date'),
            'depart' => $request->get('Department'),
            'descp' => $request->get('descp'),
        ]);
        return redirect()->to('/finance/fund')->with('success', 'Fund Add successfully.');
    }

    public function destroy(string $id)
    {
        $fund = Fund::find($id);
        $fund->delete();
        return redirect()->to('/finance/fund')->with('success', 'Fund Add successfully.');

    }


}
