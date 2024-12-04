<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quality\PChart\PChart;

class AdminQAPChartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $charts = PChart::orderBy('id', 'DESC')->paginate(8);



        return view('admin.pchart.index')->with(compact('charts'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pchart.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $date = $request->input('date');
        $monthNumber = date('n', strtotime($date));
        $yearNumber = date('Y',strtotime($date));
        $monthName = date('F', mktime(0, 0, 0, $monthNumber, 1));


        $dayOfMonth = date('j', strtotime($date));

        $no_prblm_unt = $request->get('pin_hole') + $request->get('clr_out') + $request->get('air_bbl') + $request->get('taper_ctng') + $request->get('ms_prnt') + $request->get('rst_clp') + $request->get('extr_bnd_agnt');
        $prblm_rate = ($no_prblm_unt / 200) * 100;


        $this->validate($request,[
            'date' => 'required',
            'part_no' => 'required',
            'part_name' => 'required',
            'descp' => 'required',
            'notes' => 'required',
            'pin_hole' => 'required',
            'clr_out' => 'required',
            'air_bbl' => 'required',
            'taper_ctng' => 'required',
            'ms_prnt' => 'required|not_in:none',
            'rst_clp' => 'required',
            'extr_bnd_agnt' => 'required',
        ]);
        PChart::create([
            'date' => $request->get('date'),
            'part_no' => $request->get('part_no'),
            'part_name' => $request->get('part_name'),
            'descp' => $request->get('descp'),
            'notes' => $request->get('notes'),
            'pin_hole' => $request->get('pin_hole'),
            'clr_out' => $request->get('clr_out'),
            'air_bbl' => $request->get('air_bbl'),
            'rst_clp' => $request->get('rst_clp'),
            'taper_ctng' => $request->get('taper_ctng'),
            'ms_prnt' => $request->get('ms_prnt'),
            'extr_bnd_agnt' => $request->get('extr_bnd_agnt'),
            'no_prblm_unt' => $no_prblm_unt,
            'prblm_rate' => $prblm_rate,

        ]);

        return redirect()->to('admin/pchart');
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
        $chart = PChart::find($id);
        return view('admin.pchart.edit')->with(compact('chart'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $date = $request->input('date');
        $monthNumber = date('n', strtotime($date));
        $yearNumber = date('Y',strtotime($date));
        $monthName = date('F', mktime(0, 0, 0, $monthNumber, 1));


        $dayOfMonth = date('j', strtotime($date));




        $no_prblm_unt = $request->get('pin_hole') + $request->get('clr_out') + $request->get('air_bbl') + $request->get('taper_ctng') + $request->get('ms_prnt') + $request->get('rst_clp') + $request->get('extr_bnd_agnt');
        $prblm_rate = ($no_prblm_unt / 200) * 100;


        $this->validate($request,[
            'date' => 'required',
            'part_no' => 'required',
            'part_name' => 'required',
            'descp' => 'required',
            'notes' => 'required',
            'pin_hole' => 'required',
            'clr_out' => 'required',
            'air_bbl' => 'required',
            'taper_ctng' => 'required',
            'ms_prnt' => 'required|not_in:none',
            'rst_clp' => 'required',
            'extr_bnd_agnt' => 'required',
        ]);
        $chart = PChart::find($id);
        $chart->update([
            'date' => $request->get('date'),
            'part_no' => $request->get('part_no'),
            'part_name' => $request->get('part_name'),
            'descp' => $request->get('descp'),
            'notes' => $request->get('notes'),
            'pin_hole' => $request->get('pin_hole'),
            'clr_out' => $request->get('clr_out'),
            'air_bbl' => $request->get('air_bbl'),
            'rst_clp' => $request->get('rst_clp'),
            'taper_ctng' => $request->get('taper_ctng'),
            'ms_prnt' => $request->get('ms_prnt'),
            'extr_bnd_agnt' => $request->get('extr_bnd_agnt'),
            'no_prblm_unt' => $no_prblm_unt,
            'prblm_rate' => $prblm_rate,

        ]);

        return redirect()->to('admin/pchart');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $chart = PChart::find($id);
        $chart->delete();
        return redirect()->to('admin/pchart');
    }


    public function search_data(Request $request){

        $date1 = $request->input('date1');
        $date2 = $request->input('date2');
        $monthNumber1 = date('n', strtotime($date1));
        $yearNumber1 = date('Y',strtotime($date1));
        $monthName1 = date('F', mktime(0, 0, 0, $monthNumber1, 1));
        $dayOfMonth1 = date('j', strtotime($date1));
        $monthNumber2 = date('n', strtotime($date2));
        $yearNumber2 = date('Y',strtotime($date2));
        $monthName2 = date('F', mktime(0, 0, 0, $monthNumber2, 1));
        $dayOfMont2 = date('j', strtotime($date2));

        $records = PChart::whereBetween('date',[$date1,$date2])->paginate(8);

        $ttl_pin_hole = $records->sum('pin_hole');
        $ttl_air_bbl = $records->sum('air_bbl');
        $ttl_clr_out = $records->sum('clr_out');
        $ttl_taper_ctng = $records->sum('taper_ctng');
        $ttl_extr_bnd_agnt = $records->sum('extr_bnd_agnt');
        $ttl_rst_clp = $records->sum('rst_clp');
        $ttl_ms_prnt = $records->sum('ms_prnt');
        $ttl_no_prblm = $records->sum('no_prblm_unt');
        $count = $records->count('id');
        $prblm_rate = $ttl_no_prblm / ($count * 100);
        $prblm_prcnt = number_format($prblm_rate * 100,2);


        $prblms = PChart::whereBetween('date',[$date1,$date2])->pluck('prblm_rate', 'id')->toArray();
        $prblmIds = array_keys($prblms);
        $prblmValues = array_values($prblms);


        return view('admin.pchart.view',['prblmIds' => $prblmIds,'prblmValues' => $prblmValues],compact('records','date1','date2','ttl_pin_hole','ttl_air_bbl','ttl_clr_out','ttl_taper_ctng','ttl_extr_bnd_agnt','ttl_rst_clp','ttl_ms_prnt','ttl_no_prblm','prblm_prcnt'));
    }
}
