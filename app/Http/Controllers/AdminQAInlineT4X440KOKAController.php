<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quality\Inline\InlineTube4X440KOKA;

class AdminQAInlineT4X440KOKAController extends Controller
{
    public function index(){
        $tubes = InlineTube4X440KOKA::orderBy('sr_no','DESC')->paginate(8);
        return view('admin.inline.t4X440KOKA.index')->with(compact('tubes'));
    }
    public function create(){
        return view('admin.inline.t4X440KOKA.add');
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
            'extr_snl_lyr'=>'required|not_in:none',
            'blnk_ctng'=>'required|not_in:none',
            'vulcan'=>'required|not_in:none',
            'washing'=>'required|not_in:none',
            'fnl_ctng'=>'required|not_in:none',
            'clip_asmbl'=>'required|not_in:none',
            'prod'=>'required|not_in:none',
        ]);
        InlineTube4X440KOKA::create([
            'date' => $request->get('date'),
            'month'=>$monthName,
            'year' => $yearNumber,
            'day' => $dayOfMonth,
            'extr_snl_lyr' =>$request->get('extr_snl_lyr'),
            'blnk_ctng' =>$request->get('blnk_ctng'),
            'vulcan' =>$request->get('vulcan'),
            'washing' =>$request->get('washing'),
            'fnl_ctng' =>$request->get('fnl_ctng'),
            'clip_asmbl' =>$request->get('clip_asmbl'),
            'prod' =>$request->get('prod'),
            'total' => $total

        ]);
        return redirect()->to('/admin/inline/t4X440KOKA');

    }

    public function edit(string $id){

        $tube = InlineTube4X440KOKA::find($id);
        return view('admin.inline.t4X440KOKA.edit')->with(compact('tube'));

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
            'extr_snl_lyr'=>'required|not_in:none',
            'blnk_ctng'=>'required|not_in:none',
            'vulcan'=>'required|not_in:none',
            'washing'=>'required|not_in:none',
            'fnl_ctng'=>'required|not_in:none',
            'clip_asmbl'=>'required|not_in:none',
            'prod'=>'required|not_in:none',
        ]);
        $tube = InlineTube4X440KOKA::find($id);
        $tube->update([
            'date' => $request->get('date'),
            'month'=>$monthName,
            'year' => $yearNumber,
            'day' => $dayOfMonth,
            'extr_snl_lyr' =>$request->get('extr_snl_lyr'),
            'blnk_ctng' =>$request->get('blnk_ctng'),
            'vulcan' =>$request->get('vulcan'),
            'washing' =>$request->get('washing'),
            'fnl_ctng' =>$request->get('fnl_ctng'),
            'clip_asmbl' =>$request->get('clip_asmbl'),
            'prod' =>$request->get('prod'),
            'total' => $total

        ]);
        return redirect()->to('/admin/inline/t4X440KOKA');

    }


    public function destroy(string $id){
        $tube = InlineTube4X440KOKA::find($id);
        $tube->delete();
        return redirect()->to('/admin/inline/t4X440KOKA');
    }
}
