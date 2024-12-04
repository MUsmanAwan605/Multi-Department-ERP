<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quality\Inline\InlineTubeBtryBreatherCD70;

class QAInlineTBtryBreatherCD70Controller extends Controller
{
    public function index(){
        $tubes = InlineTubeBtryBreatherCD70::orderBy('sr_no','DESC')->paginate(8);
        return view('quality.inline.tBatteryBreatherCD70.index')->with(compact('tubes'));
    }
    public function create(){
        return view('quality.inline.tBatteryBreatherCD70.add');
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
            'extr_sngl_lyr'=>'required|not_in:none',
            'semi_vulcan'=>'required|not_in:none',
            'fnl_ctng_t'=>'required|not_in:none',
            'cmplt_vulcan'=>'required|not_in:none',
            'wshng_t'=>'required|not_in:none',
            'punching'=>'required|not_in:none',
            'mldng_grmt'=>'required|not_in:none',
            'trmng_grmt'=>'required|not_in:none',
            'asmbl_grmt'=>'required|not_in:none',
            'prod'=>'required|not_in:none',
        ]);
        InlineTubeBtryBreatherCD70::create([
            'date' => $request->get('date'),
            'month'=>$monthName,
            'year' => $yearNumber,
            'day' => $dayOfMonth,
            'extr_sngl_lyr' =>$request->get('extr_sngl_lyr'),
            'semi_vulcan' =>$request->get('semi_vulcan'),
            'fnl_ctng_t' =>$request->get('fnl_ctng_t'),
            'cmplt_vulcan' =>$request->get('cmplt_vulcan'),
            'wshng_t' =>$request->get('wshng_t'),
            'punching' =>$request->get('punching'),
            'asmbl_grmt' =>$request->get('asmbl_grmt'),
            'mldng_grmt' =>$request->get('mldng_grmt'),
            'trmng_grmt' =>$request->get('trmng_grmt'),
            'prod' =>$request->get('prod'),
            'total' => $total

        ]);
        return redirect()->to('/qa/inline/tBtryBreatherCD70');

    }

    public function edit(string $id){

        $tube = InlineTubeBtryBreatherCD70::find($id);
        return view('quality.inline.tBatteryBreatherCD70.edit')->with(compact('tube'));

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
            'extr_sngl_lyr'=>'required|not_in:none',
            'semi_vulcan'=>'required|not_in:none',
            'fnl_ctng_t'=>'required|not_in:none',
            'cmplt_vulcan'=>'required|not_in:none',
            'wshng_t'=>'required|not_in:none',
            'punching'=>'required|not_in:none',
            'mldng_grmt'=>'required|not_in:none',
            'trmng_grmt'=>'required|not_in:none',
            'asmbl_grmt'=>'required|not_in:none',
            'prod'=>'required|not_in:none',
        ]);
        $tube = InlineTubeBtryBreatherCD70::find($id);
        $tube->update([
            'date' => $request->get('date'),
            'month'=>$monthName,
            'year' => $yearNumber,
            'day' => $dayOfMonth,
            'extr_sngl_lyr' =>$request->get('extr_sngl_lyr'),
            'semi_vulcan' =>$request->get('semi_vulcan'),
            'fnl_ctng_t' =>$request->get('fnl_ctng_t'),
            'cmplt_vulcan' =>$request->get('cmplt_vulcan'),
            'wshng_t' =>$request->get('wshng_t'),
            'punching' =>$request->get('punching'),
            'asmbl_grmt' =>$request->get('asmbl_grmt'),
            'mldng_grmt' =>$request->get('mldng_grmt'),
            'trmng_grmt' =>$request->get('trmng_grmt'),
            'prod' =>$request->get('prod'),
            'total' => $total


        ]);
        return redirect()->to('/qa/inline/tBtryBreatherCD70');

    }


    public function destroy(string $id){
        $tube = InlineTubeBtryBreatherCD70::find($id);
        $tube->delete();
        return redirect()->to('/qa/inline/tBtryBreatherCD70');
    }
}
