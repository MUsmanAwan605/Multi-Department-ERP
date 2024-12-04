<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quality\Capability\Capability;

class AdminQACapabilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = Capability::orderBy('id','DESC')->paginate(8);
       return view('admin.capability.index')->with(compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.capability.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'date' => 'required',
            'part_no' => 'required',
            'part_name' => 'required',
            'msrng_ins' => 'required',
            'process_name' => 'required',
            'event' => 'required|not_in:none',
            'inspector' => 'required',
            'inspct_rslt' => 'required|not_in:none',
            'inspct_data' => 'required',
            'head' => 'required',
            'manager' => 'required',
            'incharge' => 'required',

        ]);

        Capability::create([
            'date' => $request->get('date'),
            'part_no' => $request->get('part_no'),
            'part_name' => $request->get('part_name'),
            'msrng_ins' => $request->get('msrng_ins'),
            'process_name' => $request->get('process_name'),
            'event' => $request->get('event'),
            'inspector' => $request->get('inspector'),
            'inspct_rslt' => $request->get('inspct_rslt'),
            'inspct_data' => $request->get('inspct_data'),
            'head' => $request->get('head'),
            'manager' => $request->get('manager'),
            'incharge' => $request->get('incharge'),

        ]);
        return redirect()->to('admin/capability');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $report = Capability::find($id);
        return view('admin.capability.edit')->with(compact('report'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'date' => 'required',
            'part_no' => 'required',
            'part_name' => 'required',
            'msrng_ins' => 'required',
            'process_name' => 'required',
            'event' => 'required|not_in:none',
            'inspector' => 'required',
            'inspct_rslt' => 'required|not_in:none',
            'inspct_data' => 'required',
            'head' => 'required',
            'manager' => 'required',
            'incharge' => 'required',
        ]);
        $report = Capability::find($id);
        $report->update([
            'date' => $request->get('date'),
            'part_no' => $request->get('part_no'),
            'part_name' => $request->get('part_name'),
            'msrng_ins' => $request->get('msrng_ins'),
            'process_name' => $request->get('process_name'),
            'event' => $request->get('event'),
            'inspector' => $request->get('inspector'),
            'inspct_rslt' => $request->get('inspct_rslt'),
            'inspct_data' => $request->get('inspct_data'),
            'head' => $request->get('head'),
            'manager' => $request->get('manager'),
            'incharge' => $request->get('incharge'),
        ]);
        return redirect()->to('admin/capability');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $report = Capability::find($id);
        $report->delete();
        return redirect()->to('admin/capability');

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

        $records = Capability::whereBetween('date',[$date1,$date2])->paginate(8);
        $X = $records->sum('inspct_data');
        $no_sample = $records->count('id');
        $X_bar = number_format($X / $no_sample,2);
        $max = $records->max('inspct_data');
        $min = $records->min('inspct_data');
        $range = number_format($max - $min,2);
        $a = 1;
        $ttl_Xi_Xbar = 0;

        foreach($records as $record){
            ${"X$a"} =  $record->inspct_data;
            $Xi_Xbar_sq = (${"X$a"} - $X_bar)**2;

            $ttl_Xi_Xbar += $Xi_Xbar_sq;
            $a++;
        }

        $stdev_sq = $ttl_Xi_Xbar / ($no_sample -1);
        $stdev = number_format($stdev_sq **0.5,2);
        $stdev_six = number_format($stdev*6,2);
        $stdev_three = number_format($stdev*3,2);
        $ttl_limits = $max + $min;
        $val_1 = $ttl_limits / (2 - $X_bar);
        $sub_limits = $max - $min;
        $val_2 = $sub_limits / 2;
        $k = number_format($val_1 / $val_2,2);

        $cp = number_format($sub_limits / $stdev_six,2);

        $val_3 = 1 - ($k);
        $sub_six_stdev = $sub_limits / $stdev_six;
        $cpk = number_format($val_3 * $sub_six_stdev,2);
        $cp_upper = number_format(($max - $X_bar ) / $stdev_three,2);
        $cp_lower = number_format(( $X_bar - $min) / $stdev_three,2);

        return view('admin.capability.view',compact('records','date1','date2','X_bar','max','min','range','stdev','stdev_six','stdev_three','no_sample','k','cp','cpk','cp_upper','cp_lower'));

    }
}
