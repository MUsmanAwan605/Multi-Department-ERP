<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Quality\Inline\InlineTubeBtryBreatherCD100;
use Illuminate\Http\Request;
use App\Models\Quality\Monthly\MonthlyTubeBatteryBreatherCD100;
use App\Models\Quality\Final\TubeBtryBreatherCD100;

class AdminQAMonthlyTBtryBreatherCD100Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tubes = MonthlyTubeBatteryBreatherCD100::orderBy('sr_no', 'DESC')->paginate(8);
        return view('admin.monthly.tBatteryBreatherCD100.index')->with(compact('tubes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.monthly.tBatteryBreatherCD100.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $date = $request->input('month');
        $monthNumber = date('n', strtotime($date));
        $yearNumber = date('Y',strtotime($date));
        $monthName = date('F', mktime(0, 0, 0, $monthNumber, 1));
        $opr_name = $request->get('opr_name');
        $tfuelCG125 = TubeBtryBreatherCD100::get();
        $inlinetfuelCG125 = InlineTubeBtryBreatherCD100::get();
        $tubes = MonthlyTubeBatteryBreatherCD100::all();
        $totalFinalRejections = collect($tfuelCG125)->where($opr_name,'Rejected')->where('month' , $monthName)->where('year', $yearNumber)->count('sr_no');
        $totalInlineRejections = collect($inlinetfuelCG125)->where($opr_name,'Rejected')->where('month' , $monthName)->where('year', $yearNumber)->count('sr_no');

        $sumOfInlineRejections = collect($tubes)->sum('inprcs_rjct');
        $sumOfFinalRejections = collect($tubes)->sum('fnl_rjct');


        $this->validate(request(),[
            'month'=> 'required',
            'opr_name' => 'required|not_in:none',
            'prod_qty'=>'required|not_in:none',
            'inspct_qty'=>'required|not_in:none'
        ]);
        MonthlyTubeBatteryBreatherCD100::create([
            'date'=> $request->get('month'),
            'month'=>$monthName,
            'year' => $yearNumber,
            'opr_name' => $request->get('opr_name'),
            'fnl_rjct' => $totalFinalRejections,
            'inprcs_rjct'=> $totalInlineRejections,
            'prod_qty' => $request->get('prod_qty'),
            'inspct_qty' => $request->get('inspct_qty'),


        ]);
        return redirect()->to('admin/monthly/tBtryBreatherCD100');
    }

    public function view(Request $request){
        $search = $request['search'] ?? '';
        if($search != ''){
            $tubes = MonthlyTubeBatteryBreatherCD100::get();

        }
        else{
            $tubes = MonthlyTubeBatteryBreatherCD100::all();
        }
        return view('admin.monthly.tBatteryBreatherCD100.view')->with(compact('tubes','search'));
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
        $tube = MonthlyTubeBatteryBreatherCD100::find($id);
        return view('admin.monthly.tBatteryBreatherCD100.edit')->with(compact('tube'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $date = $request->input('month');
        $monthNumber = date('n', strtotime($date));
        $yearNumber = date('Y',strtotime($date));
        $monthName = date('F', mktime(0, 0, 0, $monthNumber, 1));
        $opr_name = $request->get('opr_name');
        $tfuelCG125 = TubeBtryBreatherCD100::get();
        $inlinetfuelCG125 = InlineTubeBtryBreatherCD100::get();
        $tubes = MonthlyTubeBatteryBreatherCD100::all();
        $totalFinalRejections = collect($tfuelCG125)->where($opr_name,'Rejected')->where('month' , $monthName)->where('year', $yearNumber)->count('sr_no');
        $totalInlineRejections = collect($inlinetfuelCG125)->where($opr_name,'Rejected')->where('month' , $monthName)->where('year', $yearNumber)->count('sr_no');

        $sumOfInlineRejections = collect($tubes)->sum('inprcs_rjct');
        $sumOfFinalRejections = collect($tubes)->sum('fnl_rjct');


        $this->validate(request(),[
            'month'=> 'required',
            'opr_name' => 'required|not_in:none',
            'prod_qty'=>'required|not_in:none',
            'inspct_qty'=>'required|not_in:none'
        ]);
        $tube = MonthlyTubeBatteryBreatherCD100::find($id);

        $tube->update([
            'date'=> $request->get('month'),
            'month'=>$monthName,
            'year' => $yearNumber,
            'opr_name' => $request->get('opr_name'),
            'fnl_rjct' => $totalFinalRejections,
            'inprcs_rjct'=> $totalInlineRejections,
            'prod_qty' => $request->get('prod_qty'),
            'inspct_qty' => $request->get('inspct_qty'),


        ]);
        return redirect()->to('admin/monthly/tBtryBreatherCD100');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tube = MonthlyTubeBatteryBreatherCD100::find($id);
        $tube->delete();
        return redirect()->to('admin/monthly/tBtryBreatherCD100');

    }
    public function search_data(Request $request){
        $data = $request->input('search');
        $records = MonthlyTubeBatteryBreatherCD100::whereRaw("CONCAT(month, ' ', year) LIKE ? OR CONCAT(month, year) LIKE ?", ["%$data%", "%$data%"])->paginate(8);
        return view('admin.monthly.tBatteryBreatherCD100.view',compact('records','data'));
    }
}