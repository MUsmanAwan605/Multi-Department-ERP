<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quality\Final\GrmtSideCvrDLX;

class AdminQAGrSideCvrDLXController extends Controller
{
    public function index(){
        $tubes = GrmtSideCvrDLX::orderBy('sr_no','DESC')->paginate(8);
        return view('admin.final.GrmtSideCvrDLX.index')->with(compact('tubes'));
    }
    public function create(){
        return view('admin.final.GrmtSideCvrDLX.add');
    }
    public function store(Request $request){

        $date = $request->input('date');
        $monthNumber = date('n', strtotime($date));
        $yearNumber = date('Y',strtotime($date));
        $monthName = date('F', mktime(0, 0, 0, $monthNumber, 1));

        $monthNumberAsString = strval($monthNumber);

        $dayOfMonth = date('j', strtotime($date));


        $total = 0;
        if($request->get('moulding') != 'Approved'){
            $total++;
        }
        if($request->get('triming') != 'Approved'){
            $total++;
        }


        $this->validate(request(),[
            'date'=> 'required',
            'moulding'=>'required|not_in:none',
            'triming' => 'required|not_in:none',
            'prod'=>'required|not_in:none',
        ]);
        GrmtSideCvrDLX::create([
            'date' => $request->get('date'),
            'month'=>$monthName,
            'year' => $yearNumber,
            'day' => $dayOfMonth,
            'moulding' =>$request->get('moulding'),
            'triming' =>$request->get('triming'),
            'prod' =>$request->get('prod'),
            'total' => $total

        ]);
        return redirect()->to('/admin/product/GrmtSideCvrDLX');

    }

    public function edit(string $id){

        $tube = GrmtSideCvrDLX::find($id);
        return view('admin.final.GrmtSideCvrDLX.edit')->with(compact('tube'));

    }

    public function update(Request $request ,string $id){

        $date = $request->input('date');
        $monthNumber = date('n', strtotime($date));
        $yearNumber = date('Y',strtotime($date));
        $monthName = date('F', mktime(0, 0, 0, $monthNumber, 1));

        $monthNumberAsString = strval($monthNumber);

        $dayOfMonth = date('j', strtotime($date));



        $total = 0;
        if($request->get('moulding') != 'Approved'){
            $total++;
        }
        if($request->get('triming') != 'Approved'){
            $total++;
        }


        $this->validate(request(),[
            'date'=> 'required',
            'moulding'=>'required|not_in:none',
            'triming'=>'required|not_in:none',
            'prod'=>'required|not_in:none',
        ]);
        $tube = GrmtSideCvrDLX::find($id);
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
        return redirect()->to('/admin/product/GrmtSideCvrDLX');

    }


    public function destroy(string $id){
        $tube = GrmtSideCvrDLX::find($id);
        $tube->delete();
        return redirect()->to('/admin/product/GrmtSideCvrDLX');
    }
}
