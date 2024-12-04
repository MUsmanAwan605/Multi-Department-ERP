<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quality\XR\XR;
use Carbon\Carbon;

class QAXRController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $charts = XR::orderBy('id', 'DESC')->paginate(8);



        return view('quality.XR.index')->with(compact('charts'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('quality.XR.add');
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
        $X1 = $request->get('X1');
        $X2 = $request->get('X2');
        $X3 = $request->get('X3');
        $X4 = $request->get('X4');
        $X5 = $request->get('X5');
        $total = $X1 + $X2 + $X3 + $X4 + $X5;
        $ttl_msrmnt = 0;

        if($request->get('X1') != ''){
            $ttl_msrmnt++;
        }
        if($request->get('X2') != ''){
            $ttl_msrmnt++;
        }
        if($request->get('X3') != ''){
            $ttl_msrmnt++;
        }
        if($request->get('X4') != ''){
            $ttl_msrmnt++;
        }
        if($request->get('X5') != ''){
            $ttl_msrmnt++;
        }

        $mean = $total / $ttl_msrmnt;
        $range = max($X1,$X2,$X3,$X4,$X5) - min($X1,$X2,$X3,$X4,$X5);
        $table = XR::all();

        $no_sample = $table->count('id') + 1;



        $X_Total = $table->sum('mean') + $mean;
        $R_Total = $table->sum('range') + $range;


            $CL = $X_Total / $no_sample;
            $R_bar = $R_Total / $no_sample;








        $this->validate($request,[
            'date' => 'required',
            'lot_no' => 'required',
            'lot_size' => 'required',
            'confirmation' => 'required|not_in:none',
            'notes' => 'required',
            'sup_prcs_zone' => 'required',
            'part_no' => 'required',
            'part_name' => 'required',
            'su_chrctr' => 'required|not_in:none',
            'stndrd' => 'required',
            'smpl_frqncy' => 'required',
            'msrng_eqp' => 'required',
        ]);
        XR::create([
            'date' => $request->get('date'),
            'day' => $dayOfMonth,
            'month' => $monthName,
            'year' => $yearNumber,
            'lot_no' => $request->get('lot_no'),
            'lot_size' => $request->get('lot_size'),
            'X1' => $request->get('X1'),
            'X2' => $request->get('X2'),
            'X3' => $request->get('X3'),
            'X4' => $request->get('X4'),
            'X5' => $request->get('X5'),
            'no_of_smpl' => $ttl_msrmnt,
            'total' => $total,
            'mean' => $mean,
            'range' => $range,
            'confirmation' => $request->get('confirmation'),
            'notes' => $request->get('notes'),
            'sup_prcs_zone' => $request->get('sup_prcs_zone'),
            'part_no' => $request->get('part_no'),
            'part_name' => $request->get('part_name'),
            'su_chrctr' => $request->get('su_chrctr'),
            'stndrd' => $request->get('stndrd'),
            'smpl_frqncy' => $request->get('smpl_frqncy'),
            'msrng_eqp' => $request->get('msrng_eqp'),
            'cl' => $CL,
            'r_bar' => $R_bar,
        ]);

        return redirect()->to('qa/XR');
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
        $chart = XR::find($id);
        return view('quality.XR.edit')->with(compact('chart'));
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
        $X1 = $request->get('X1');
        $X2 = $request->get('X2');
        $X3 = $request->get('X3');
        $X4 = $request->get('X4');
        $X5 = $request->get('X5');
        $total = $X1 + $X2 + $X3 + $X4 + $X5;
        $ttl_msrmnt = 0;

        if($request->get('X1') != ''){
            $ttl_msrmnt++;
        }
        if($request->get('X2') != ''){
            $ttl_msrmnt++;
        }
        if($request->get('X3') != ''){
            $ttl_msrmnt++;
        }
        if($request->get('X4') != ''){
            $ttl_msrmnt++;
        }
        if($request->get('X5') != ''){
            $ttl_msrmnt++;
        }

        $mean = $total / $ttl_msrmnt;
        $range = max($X1,$X2,$X3,$X4,$X5) - min($X1,$X2,$X3,$X4,$X5);
        $table = XR::all();

        $no_sample = $table->count('id') + 1;



        $X_Total = $table->sum('mean') + $mean;
        $R_Total = $table->sum('range') + $range;


            $CL = $X_Total / $no_sample;
            $R_bar = $R_Total / $no_sample;






        $this->validate($request,[
            'date' => 'required',
            'lot_no' => 'required',
            'lot_size' => 'required',
            'confirmation' => 'required|not_in:none',
            'notes' => 'required',
            'sup_prcs_zone' => 'required',
            'part_no' => 'required',
            'part_name' => 'required',
            'su_chrctr' => 'required|not_in:none',
            'stndrd' => 'required',
            'smpl_frqncy' => 'required',
            'msrng_eqp' => 'required',
        ]);
        $chart = XR::find($id);
        $chart->update([
            'date' => $request->get('date'),
            'day' => $dayOfMonth,
            'month' => $monthName,
            'year' => $yearNumber,
            'lot_no' => $request->get('lot_no'),
            'lot_size' => $request->get('lot_size'),
            'X1' => $request->get('X1'),
            'X2' => $request->get('X2'),
            'X3' => $request->get('X3'),
            'X4' => $request->get('X4'),
            'X5' => $request->get('X5'),
            'no_of_smpl' => $ttl_msrmnt,
            'total' => $total,
            'mean' => $mean,
            'range' => $range,
            'confirmation' => $request->get('confirmation'),
            'notes' => $request->get('notes'),
            'sup_prcs_zone' => $request->get('sup_prcs_zone'),
            'part_no' => $request->get('part_no'),
            'part_name' => $request->get('part_name'),
            'su_chrctr' => $request->get('su_chrctr'),
            'stndrd' => $request->get('stndrd'),
            'smpl_frqncy' => $request->get('smpl_frqncy'),
            'msrng_eqp' => $request->get('msrng_eqp'),
            'cl' => $CL,
            'r_bar' => $R_bar,
        ]);

        return redirect()->to('qa/XR');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $chart = XR::find($id);
        $chart->delete();
        return redirect()->to('qa/XR');
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

        $records = XR::whereBetween('date',[$date1,$date2])->paginate(8);
        $mean = $records->sum('mean');
        $range = $records->sum('range');
        $no_sample = $records->count('id');
        $CL = $mean / $no_sample;
        $R_bar = $range / $no_sample;

        foreach($records as $record){
            if($record->no_of_smpl == 5){
                $coefficient_A2 = 0.58;
                $coefficient_D4 = 2.11;
            }
            if($record->no_of_smpl == 4){
                $coefficient_A2 = 0.73;
            $coefficient_D4 = 2.28;
            }
            if($record->no_of_smpl == 3){
                $coefficient_A2 = 1.02;
            $coefficient_D4 = 2.57;
            }
            if($record->no_of_smpl == 2){
                $coefficient_A2 = 1.88;
            $coefficient_D4 = 3.27;
            }
        }

        $X_UCL = number_format($CL + $coefficient_A2 * $R_bar, 2);
        $R_UCL = number_format($coefficient_D4 * $R_bar, 2);
        $X_LCL = number_format($CL - $coefficient_A2 * $R_bar, 2);
        $R_LCL = 0 * $R_bar;


        $X1_count = $records->count('X1');
        $X2_count = $records->count('X2');
        $X3_count = $records->count('X3');
        $X4_count = $records->count('X4');
        $X5_count = $records->count('X5');

        if($X1_count == 0){
            $X1_count++;
        }
        else{
            $X1_count;
        }
        if($X2_count == 0){
            $X2_count++;
        }
        else{
            $X2_count;
        }
        if($X3_count == 0){
            $X3_count++;
        }
        else{
            $X3_count;
        }
        if($X4_count == 0){
            $X4_count++;
        }
        else{
            $X4_count;
        }
        if($X5_count == 0){
            $X5_count++;
        }
        else{
            $X5_count;
        }

        $X1_sum = $records->sum('X1');
        $X2_sum = $records->sum('X2');
        $X3_sum = $records->sum('X3');
        $X4_sum = $records->sum('X4');
        $X5_sum = $records->sum('X5');

        $ttl_count = $X1_count + $X2_count + $X3_count + $X4_count + $X5_count;
        $ttl_sum = $X1_sum + $X2_sum + $X3_sum + $X4_sum + $X5_sum;
        $ttl_mean = number_format($ttl_sum / $ttl_count,2);

        $overallMin = PHP_INT_MAX;
        $overallMax = PHP_INT_MIN;


        for ($i = 1; $i <= 5; $i++) {

            $minValue = $records->min("X$i");
            $maxValue = $records->max("X$i");

            $overallMin = min($overallMin, $minValue);
            $overallMax = max($overallMax, $maxValue);
        }

        $overallRange = $overallMax - $overallMin;
        $USL = $overallMax;
        $LSL = $overallMin;


        $ttl_Xi_Xbar_sq = 0;
        $a = 1;
        $ttl_col_val = 0;
        foreach($records as $record){
            ${"X1_$a"} = $record->X1;
            $ttl_col_val++;
            ${"X2_$a"} = $record->X2;
            $ttl_col_val++;
            ${"X3_$a"} = $record->X3;
            $ttl_col_val++;
            ${"X4_$a"} = $record->X4;
            $ttl_col_val++;
            ${"X5_$a"} = $record->X5;
            $ttl_col_val++;

            $X1_Xbar = ${"X1_$a"} - $ttl_mean;
            $X2_Xbar = ${"X2_$a"} - $ttl_mean;
            $X3_Xbar = ${"X3_$a"} - $ttl_mean;
            $X4_Xbar = ${"X4_$a"} - $ttl_mean;
            $X5_Xbar = ${"X5_$a"} - $ttl_mean;

            $X1_Xbar_sq =  $X1_Xbar **2;
            $X2_Xbar_sq =  $X2_Xbar **2;
            $X3_Xbar_sq =  $X3_Xbar **2;
            $X4_Xbar_sq =  $X4_Xbar **2;
            $X5_Xbar_sq =  $X5_Xbar **2;

            $sum_Xi_Xbar_sq =  $X1_Xbar_sq + $X2_Xbar_sq + $X3_Xbar_sq + $X4_Xbar_sq + $X5_Xbar_sq;

            $ttl_Xi_Xbar_sq += number_format($sum_Xi_Xbar_sq,2);
            $a++;

        }

        $n_1 = $ttl_col_val - 1;
        $var = number_format($ttl_Xi_Xbar_sq / $n_1,2);
        $st_dev = number_format($var**0.5,2);

        $cp = number_format( ($USL - $LSL) / ($st_dev * 6),2);
        $cpu = number_format( ($USL - $ttl_mean) / ($st_dev * 3),2);
        $cpl = number_format( ($ttl_mean - $LSL) / ($st_dev * 3),2);
        $cpk = min($cpu,$cpl);

         $means = XR::whereBetween('date',[$date1,$date2])->pluck('mean', 'id')->toArray();
         $ranges = XR::whereBetween('date',[$date1,$date2])->pluck('range', 'id')->toArray();

         $meanIds = array_keys($means);
         $meanValues = array_values($means);
         $rangeIds = array_keys($ranges);
         $rangeValues = array_values($ranges);

        return view('quality.XR.view',['meanIds' => $meanIds,'meanValues' => $meanValues,'rangeIds' => $rangeIds,'rangeValues' => $rangeValues],compact('records','date1','date2','X_UCL','R_UCL','X_LCL','R_LCL','ttl_mean','overallRange','ttl_Xi_Xbar_sq','USL','LSL','var','st_dev','cp','cpu','cpl','cpk'));
    }
}
