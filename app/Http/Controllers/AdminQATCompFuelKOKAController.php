<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quality\Final\TubeCompFuelKOKA;

class AdminQATCompFuelKOKAController extends Controller
{
    public function index(){
        $tubes = TubeCompFuelKOKA::orderBy('sr_no','DESC')->paginate(8);
        return view('admin.final.tCompfuelKOKA.index')->with(compact('tubes'));
    }
    public function create(){
        return view('admin.final.tCompfuelKOKA.add');
    }
    public function store(Request $request){

        $date = $request->input('date');
        $monthNumber = date('n', strtotime($date));
        $yearNumber = date('Y',strtotime($date));
        $monthName = date('F', mktime(0, 0, 0, $monthNumber, 1));

        $monthNumberAsString = strval($monthNumber);

        $dayOfMonth = date('j', strtotime($date));


        $total = 0;
        if($request->get('extr_btm_lyr') != 'Approved'){
            $total++;
        }
        if($request->get('extr_top_lyr') != 'Approved'){
            $total++;
        }
        if($request->get('blnk_ctng_tlyr') != 'Approved'){
            $total++;
        }
        if($request->get('vulcan_tlyr') != 'Approved'){
            $total++;
        }
        if($request->get('washing') != 'Approved'){
            $total++;
        }
        if($request->get('fnl_ctng_tlyr') != 'Approved'){
            $total++;
        }

        if($request->get('fnl_ctng_vtube') != 'Approved'){
            $total++;
        }
        if($request->get('vtube_asmbl') != 'Approved'){
            $total++;
        }
        if($request->get('date_code_prnt') != 'Approved'){
            $total++;
        }
        if($request->get('clip_asmbl') != 'Approved'){
            $total++;
        }
        if($request->get('ident_mrk') != 'Approved'){
            $total++;
        }
        if($request->get('tube_prod') != 'Approved'){
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
            'fnl_ctng_vtube'=>'required|not_in:none',
            'vtube_asmbl'=>'required|not_in:none',
            'date_code_prnt'=>'required|not_in:none',
            'ident_mrk'=>'required|not_in:none',
            'clip_asmbl'=>'required|not_in:none',
            'tube_prod'=>'required|not_in:none',
        ]);
        TubeCompFuelKOKA::create([
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
            'fnl_ctng_vtube' =>$request->get('fnl_ctng_vtube'),
            'vtube_asmbl' =>$request->get('vtube_asmbl'),
            'date_code_prnt' =>$request->get('date_code_prnt'),
            'ident_mrk'=> $request->get('ident_mrk'),
            'clip_asmbl' =>$request->get('clip_asmbl'),
            'tube_prod' =>$request->get('tube_prod'),
            'total' => $total

        ]);
        return redirect()->to('/admin/product/tCompfuelKOKA');

    }

    public function edit(string $id){

        $tube = TubeCompFuelKOKA::find($id);
        return view('admin.final.tCompfuelKOKA.edit')->with(compact('tube'));

    }

    public function update(Request $request ,string $id){

        $date = $request->input('date');
        $monthNumber = date('n', strtotime($date));
        $yearNumber = date('Y',strtotime($date));
        $monthName = date('F', mktime(0, 0, 0, $monthNumber, 1));

        $monthNumberAsString = strval($monthNumber);

        $dayOfMonth = date('j', strtotime($date));



        $total = 0;
        if($request->get('extr_btm_lyr') != 'Approved'){
            $total++;
        }
        if($request->get('extr_top_lyr') != 'Approved'){
            $total++;
        }
        if($request->get('blnk_ctng_tlyr') != 'Approved'){
            $total++;
        }
        if($request->get('vulcan_tlyr') != 'Approved'){
            $total++;
        }
        if($request->get('washing') != 'Approved'){
            $total++;
        }
        if($request->get('fnl_ctng_tlyr') != 'Approved'){
            $total++;
        }

        if($request->get('fnl_ctng_vtube') != 'Approved'){
            $total++;
        }
        if($request->get('vtube_asmbl') != 'Approved'){
            $total++;
        }
        if($request->get('date_code_prnt') != 'Approved'){
            $total++;
        }
        if($request->get('clip_asmbl') != 'Approved'){
            $total++;
        }
        if($request->get('ident_mrk') != 'Approved'){
            $total++;
        }
        if($request->get('tube_prod') != 'Approved'){
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
            'fnl_ctng_vtube'=>'required|not_in:none',
            'vtube_asmbl'=>'required|not_in:none',
            'date_code_prnt'=>'required|not_in:none',
            'ident_mrk'=>'required|not_in:none',
            'clip_asmbl'=>'required|not_in:none',
            'tube_prod'=>'required|not_in:none',
        ]);
        $tube = TubeCompFuelKOKA::find($id);
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
            'fnl_ctng_vtube' =>$request->get('fnl_ctng_vtube'),
            'vtube_asmbl' =>$request->get('vtube_asmbl'),
            'date_code_prnt' =>$request->get('date_code_prnt'),
            'ident_mrk'=> $request->get('ident_mrk'),
            'clip_asmbl' =>$request->get('clip_asmbl'),
            'tube_prod' =>$request->get('tube_prod'),
            'total' => $total

        ]);
        return redirect()->to('/admin/product/tCompfuelKOKA');

    }


    public function destroy(string $id){
        $tube = TubeCompFuelKOKA::find($id);
        $tube->delete();
        return redirect()->to('/admin/product/tCompfuelKOKA');
    }
}
