<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quality\Inline\InlineCshnFrntFuelTnkDLX;

class QAInlineCshnFrntFuelTnkDLXController extends Controller
{
    public function index(){
        $tubes = InlineCshnFrntFuelTnkDLX::orderBy('sr_no','DESC')->paginate(8);
        return view('quality.inline.CshnFrntFuelTnkDLX.index')->with(compact('tubes'));
    }
    public function create(){
        return view('quality.inline.CshnFrntFuelTnkDLX.add');
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
            'moulding'=>'required|not_in:none',
            'triming' => 'required|not_in:none',
            'prod'=>'required|not_in:none',
        ]);
        InlineCshnFrntFuelTnkDLX::create([
            'date' => $request->get('date'),
            'month'=>$monthName,
            'year' => $yearNumber,
            'day' => $dayOfMonth,
            'moulding' =>$request->get('moulding'),
            'triming' =>$request->get('triming'),
            'prod' =>$request->get('prod'),
            'total' => $total

        ]);
        return redirect()->to('/qa/inline/CshnFrntFuelTnkDLX');

    }

    public function edit(string $id){

        $tube = InlineCshnFrntFuelTnkDLX::find($id);
        return view('quality.inline.CshnFrntFuelTnkDLX.edit')->with(compact('tube'));

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
            'moulding'=>'required|not_in:none',
            'triming'=>'required|not_in:none',
            'prod'=>'required|not_in:none',
        ]);
        $tube = InlineCshnFrntFuelTnkDLX::find($id);
        $tube->update([
            'date' => $request->get('date'),
            'month'=>$monthName,
            'year' => $yearNumber,
            'day' => $dayOfMonth,
            'moulding' =>$request->get('moulding'),
            'triming' =>$request->get('triming'),
            'prod' =>$request->get('prod'),
            'total' => $total

        ]);
        return redirect()->to('/qa/inline/CshnFrntFuelTnkDLX');

    }


    public function destroy(string $id){
        $tube = InlineCshnFrntFuelTnkDLX::find($id);
        $tube->delete();
        return redirect()->to('/qa/inline/CshnFrntFuelTnkDLX');
    }
}
