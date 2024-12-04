<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quality\Inline\InlineTubeBreatherKOKA;

class QAInlineTBreatherKOKAController extends Controller
{
    public function index(){
        $tubes = InlineTubeBreatherKOKA::orderBy('sr_no','DESC')->paginate(8);
        return view('quality.inline.tBreatherKOKA.index')->with(compact('tubes'));
    }
    public function create(){
        return view('quality.inline.tBreatherKOKA.add');
    }
    public function store(Request $request){

        $date = $request->input('date');
        $monthNumber = date('n', strtotime($date));
        $yearNumber = date('Y',strtotime($date));
        $monthName = date('F', mktime(0, 0, 0, $monthNumber, 1));

        $monthNumberAsString = strval($monthNumber);

        $dayOfMonth = date('j', strtotime($date));


        $total = 0;
        if($request->get('insp_rslt') != 'Approved'){
            $total++;
        }


        $this->validate(request(),[
            'date'=> 'required',
            'extr_btm_lyr'=>'required|not_in:none',
            'extr_top_lyr'=>'required|not_in:none',
            'blnk_ctng_tlyr'=>'required|not_in:none',
            'vulcan_tlyr'=>'required|not_in:none',
            'washing'=>'required|not_in:none',
            'fnl_ctng_tlyr'=>'required|not_in:none',
            'date_code_prnt'=>'required|not_in:none',
            'prod'=>'required|not_in:none',
        ]);
        InlineTubeBreatherKOKA::create([
            'date' => $request->get('date'),
            'month'=>$monthName,
            'year' => $yearNumber,
            'day' => $dayOfMonth,
            'extr_btm_lyr' =>$request->get('extr_btm_lyr'),
            'extr_top_lyr' =>$request->get('extr_top_lyr'),
            'blnk_ctng_tlyr' =>$request->get('blnk_ctng_tlyr'),
            'vulcan_tlyr' =>$request->get('vulcan_tlyr'),
            'washing' =>$request->get('washing'),
            'fnl_ctng_tlyr' =>$request->get('fnl_ctng_tlyr'),
            'date_code_prnt' =>$request->get('date_code_prnt'),
            'prod' =>$request->get('prod'),
            'total' => $total

        ]);
        return redirect()->to('/qa/inline/tBreatherKOKA');

    }

    public function edit(string $id){

        $tube = InlineTubeBreatherKOKA::find($id);
        return view('quality.inline.tBreatherKOKA.edit')->with(compact('tube'));

    }

    public function update(Request $request ,string $id){

        $date = $request->input('date');
        $monthNumber = date('n', strtotime($date));
        $yearNumber = date('Y',strtotime($date));
        $monthName = date('F', mktime(0, 0, 0, $monthNumber, 1));

        $monthNumberAsString = strval($monthNumber);

        $dayOfMonth = date('j', strtotime($date));



        $total = 0;
        if($request->get('insp_rslt') != 'Approved'){
            $total++;
        }


        $this->validate(request(),[
            'date'=> 'required',
            'extr_btm_lyr'=>'required|not_in:none',
            'extr_top_lyr'=>'required|not_in:none',
            'blnk_ctng_tlyr'=>'required|not_in:none',
            'vulcan_tlyr'=>'required|not_in:none',
            'washing'=>'required|not_in:none',
            'fnl_ctng_tlyr'=>'required|not_in:none',
            'date_code_prnt'=>'required|not_in:none',
            'prod'=>'required|not_in:none',
        ]);
        $tube = InlineTubeBreatherKOKA::find($id);
        $tube->update([
            'date' => $request->get('date'),
            'month'=>$monthName,
            'year' => $yearNumber,
            'day' => $dayOfMonth,
            'extr_btm_lyr' =>$request->get('extr_btm_lyr'),
            'extr_top_lyr' =>$request->get('extr_top_lyr'),
            'blnk_ctng_tlyr' =>$request->get('blnk_ctng_tlyr'),
            'vulcan_tlyr' =>$request->get('vulcan_tlyr'),
            'washing' =>$request->get('washing'),
            'fnl_ctng_tlyr' =>$request->get('fnl_ctng_tlyr'),
            'date_code_prnt' =>$request->get('date_code_prnt'),
            'prod' =>$request->get('prod'),
            'total' => $total

        ]);
        return redirect()->to('/qa/inline/tBreatherKOKA');

    }


    public function destroy(string $id){
        $tube = InlineTubeBreatherKOKA::find($id);
        $tube->delete();
        return redirect()->to('/qa/inline/tBreatherKOKA');
    }
}
