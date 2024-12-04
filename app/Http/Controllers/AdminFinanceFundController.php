<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fund;
use App\Models\Department;

class AdminFinanceFundController extends Controller
{
    public function index(){

        $funds = Fund::orderBy('id','DESC')->paginate(10);
        return view('admin.finance.fund.index')->with(compact('funds'));
    }

    public function create(){
        $departments=Department::all();
        return view('admin.finance.fund.add',compact('departments'));
    }

    public function store(Request $request){

        $this->validate(request(),[
            'fund' => 'required',
            'date' => 'required|date',
            'Department' => 'required|not_in:none',
            'descp' => 'required',

        ]);

        Fund::create([
            'fund' => $request->get('fund'),
            'date' => $request->get('date'),
            'depart' => $request->get('Department'),
            'descp' => $request->get('descp'),

        ]);
        return redirect()->to('/admin/finance/fund')->with('success', 'Fund Add successfully.');
    }

    public function edit(string $id)
    {
        $departments=Department::all();
        $fund = Fund::find($id);
        return view('/admin/finance/fund/edit')->with(compact('fund','departments'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate(request(),[
            'fund' => 'required',
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
        return redirect()->to('/admin/finance/fund')->with('success', 'Fund Add successfully.');
    }

    public function destroy(string $id)
    {
        $fund = Fund::find($id);
        $fund->delete();
        return redirect()->to('/admin/finance/fund')->with('success', 'Fund Add successfully.');

    }


}
