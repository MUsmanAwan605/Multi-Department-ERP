<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quality\Final\TubeBreatherDLX;

class AdminQATBreatherDLXController extends Controller
{
    public function index(){
        $tubes = TubeBreatherDLX::orderBy('sr_no','DESC')->paginate(8);
        return view('admin.final.tBreatherDeluxe.index')->with(compact('tubes'));
    }
    public function create(){
        return view('admin.final.tBreatherDeluxe.add');
    }
    public function store(Request $request){

        $date = $request->input('date');
        $monthNumber = date('n', strtotime($date));
        $yearNumber = date('Y',strtotime($date));
        $monthName = date('F', mktime(0, 0, 0, $monthNumber, 1));

        $monthNumberAsString = strval($monthNumber);

        $dayOfMonth = date('j', strtotime($date));


        $total = 0;
        if($request->get('extr_snl_lyr') != 'Approved'){
            $total++;
        }
        if($request->get('blnk_ctng') != 'Approved'){
            $total++;
        }
        if($request->get('vulcan') != 'Approved'){
            $total++;
        }
        if($request->get('washing') != 'Approved'){
            $total++;
        }
        if($request->get('fnl_ctng') != 'Approved'){
            $total++;
        }
        if($request->get('date_code_prnt') != 'Approved'){
            $total++;
        }
        if($request->get('clip_asmbl') != 'Approved'){
            $total++;
        }


        $this->validate(request(),[
            'date'=> 'required',
            'extr_snl_lyr'=>'required|not_in:none',
            'blnk_ctng'=>'required|not_in:none',
            'vulcan'=>'required|not_in:none',
            'washing'=>'required|not_in:none',
            'fnl_ctng'=>'required|not_in:none',
            'date_code_prnt'=>'required|not_in:none',
            'clip_asmbl'=>'required|not_in:none',
            'prod'=>'required|not_in:none',
        ]);
        TubeBreatherDLX::create([
            'date' => $request->get('date'),
            'month'=>$monthName,
            'year' => $yearNumber,
            'day' => $dayOfMonth,
            'extr_snl_lyr' =>$request->get('extr_snl_lyr'),
            'blnk_ctng' =>$request->get('blnk_ctng'),
            'vulcan' =>$request->get('vulcan'),
            'washing' =>$request->get('washing'),
            'fnl_ctng' =>$request->get('fnl_ctng'),
            'date_code_prnt' =>$request->get('date_code_prnt'),
            'clip_asmbl' =>$request->get('clip_asmbl'),
            'prod' =>$request->get('prod'),
            'total' => $total

        ]);
        return redirect()->to('/admin/product/tBreatherDeluxe');

    }

    public function edit(string $id){

        $tube = TubeBreatherDLX::find($id);
        return view('admin.final.tBreatherDeluxe.edit')->with(compact('tube'));

    }

    public function update(Request $request ,string $id){

        $date = $request->input('date');
        $monthNumber = date('n', strtotime($date));
        $yearNumber = date('Y',strtotime($date));
        $monthName = date('F', mktime(0, 0, 0, $monthNumber, 1));

        $monthNumberAsString = strval($monthNumber);

        $dayOfMonth = date('j', strtotime($date));



        $total = 0;
        if($request->get('extr_snl_lyr') != 'Approved'){
            $total++;
        }
        if($request->get('blnk_ctng') != 'Approved'){
            $total++;
        }
        if($request->get('vulcan') != 'Approved'){
            $total++;
        }
        if($request->get('washing') != 'Approved'){
            $total++;
        }
        if($request->get('fnl_ctng') != 'Approved'){
            $total++;
        }
        if($request->get('date_code_prnt') != 'Approved'){
            $total++;
        }
        if($request->get('clip_asmbl') != 'Approved'){
            $total++;
        }


        $this->validate(request(),[
            'date'=> 'required',
            'extr_snl_lyr'=>'required|not_in:none',
            'blnk_ctng'=>'required|not_in:none',
            'vulcan'=>'required|not_in:none',
            'washing'=>'required|not_in:none',
            'fnl_ctng'=>'required|not_in:none',
            'date_code_prnt'=>'required|not_in:none',
            'clip_asmbl'=>'required|not_in:none',
            'prod'=>'required|not_in:none',
        ]);
        $tube = TubeBreatherDLX::find($id);
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
            'date_code_prnt' =>$request->get('date_code_prnt'),
            'clip_asmbl' =>$request->get('clip_asmbl'),
            'prod' =>$request->get('prod'),
            'total' => $total

        ]);
        return redirect()->to('/admin/product/tBreatherDeluxe');

    }


    public function destroy(string $id){
        $tube = TubeBreatherDLX::find($id);
        $tube->delete();
        return redirect()->to('/admin/product/tBreatherDeluxe');
    }
}
